from __future__ import unicode_literals

from django.db import models
from django.utils.encoding import python_2_unicode_compatible

# Each model will have an automatic id field.
# TODO(loganesian): Determine if this is the best way to store this information.
# Users here refers to the company-side users.
@python_2_unicode_compatible
class User(models.Model):
  name = models.CharField('Name', max_length=100)
  email = models.EmailField()

  def __str__(self):
    self.name

@python_2_unicode_compatible
class Address(models.Model):
  street_one = models.CharField(max_length=150)
  street_two = models.CharField(max_length=150, blank=True)
  city = models.CharField(max_length=150)
  state = models.CharField(max_length=150)
  zip_code = models.CharField(max_length=50)
  country = models.CharField(max_length=150)

  def __str__(self):
    "{0} {1} {2}, {3} {4}, {5}".format(self.street_one,
                                       self.street_two,
                                       self.city,
                                       self.state,
                                       self.zip_code,
                                       self.country)

@python_2_unicode_compatible
class Customer(models.Model):
  EMAIL = 'EM'
  PHONE = 'PN'
  CONTACT_METHODS = (
      (EMAIL, 'Email'),
      (PHONE, 'Phone')
  )
  name = models.CharField('Name', max_length=100)
  email = models.EmailField()
  phone = models.CharField('Phone', max_length=20)
  addresses = models.ManyToManyField(Address)
  method_of_contact = models.CharField(max_length=10, choices=CONTACT_METHODS, default=EMAIL)
  notifications_opt_in = models.BooleanField('Notifications opt-in', default=False)

  def __str__(self):
    return self.name

@python_2_unicode_compatible
class Company(models.Model):
  name = models.CharField('Name', max_length=100)
  phone = models.CharField('Phone', max_length=20, blank=True)
  email = models.EmailField()
  addresses = models.ManyToManyField(Address)
  resale_number = models.CharField(max_length=50)
  point_of_contact = models.ManyToManyField(Customer,
                                            through='PointsOfContact',
                                            through_fields=('company',
                                                            'customer'))

  def __str__(self):
    return self.name


@python_2_unicode_compatible
class PointsOfContact(models.Model):
  customer = models.ForeignKey(Customer, on_delete=models.CASCADE)
  company = models.ForeignKey(Company, on_delete=models.CASCADE)
  primary_poc = models.BooleanField('Primary point-of-contact', default=False)

  def __str__(self):
    return "{0} point of contact: {1}".format(self.company, self.customer)


@python_2_unicode_compatible
class MetalType(models.Model):
  metal_type = models.CharField(max_length=20)

  def __str__(self):
    print self.metal_type

@python_2_unicode_compatible
class FinishType(models.Model):
  finish_type = models.CharField(max_length=20)

  def __str__(self):
    print self.finish_type

@python_2_unicode_compatible
class JewelryType(models.Model):
  RING = 'R'
  EARRING = 'E'
  NECKLACE = 'N'
  PENDANT = 'P'
  BRACELET = 'BR'
  CUFFS = 'C'
  PIN = 'P'
  HAIRPIN = 'HP'
  WALLET_CHAIN = 'WC'
  BUCKLE = 'BU'
  TYPE_CHOICES = (
      (RING, 'Ring'),
      (NECKLACE, 'Necklace'),
      (PENDANT, 'Pendant'),
      (BRACELET, 'Bracelet'),
      (CUFFS, 'Cuffs'),
      (PIN, 'Pin'),
      (HAIRPIN, 'Hairpin'),
      (WALLET_CHAIN, 'Wallet chain'),
      (BUCKLE, 'Buckle'),
  )
  jewelry_type = models.CharField(choices=TYPE_CHOICES, max_length=2)

  def __str__(self):
    print self.jewelry_type
  

@python_2_unicode_compatible
class JewelrySizeSpecification(models.Model):
  min_size = models.FloatField()
  max_size = models.FloatField(null=True, blank=True)
  step_size = models.FloatField(null=True, blank=True)
  units = models.CharField(max_length=10)

  def __str__(self):
    return "Sizes {0}: min: {1}, max: {2}: increments: {3}.".format(self.units, self.min_size, self.max_size, self.step_size)


@python_2_unicode_compatible
class Product(models.Model):
  style_number = models.AutoField(primary_key=True)
  jewelry_type = models.ForeignKey(JewelryType)
  metal_types = models.ManyToManyField(MetalType)
  finish_types = models.ManyToManyField(FinishType)
  # TODO(loganesian): Verify if this is the right way to on_delete.
  available_sizes = models.ForeignKey(JewelrySizeSpecification, on_delete=models.PROTECT, blank=True, null=True)
  unit_price = models.DecimalField(max_digits=10, decimal_places=2)

  def __str__(self):
    print self.style_number

# TODO(loganesian): Should this inherit from Products or have it as a ForeignKey.
@python_2_unicode_compatible
class CustomerProduct(models.Model):
  base_product = models.ForeignKey(Product, on_delete=models.PROTECT)
  unit_number = models.IntegerField()
  # TODO(loganesian): Find a way to limit these choices based on the metal_types of base product.
  finish_type = models.ForeignKey(FinishType, on_delete=models.SET_NULL, blank=True, null=True) 
  metal_type = models.ForeignKey(MetalType, on_delete=models.SET_NULL, blank=True, null=True)
  size = models.ForeignKey(JewelrySizeSpecification, on_delete=models.SET_NULL, blank=True, null=True)

  def __str__(self):
    return "Base product: {0} x{1}, specifications: {2}, {3}.".format(self.base_product,
                                                                      self.unit_number,
                                                                      self.finish_type,
                                                                      self.metal_type)


# TODO(loganesian): Will need to properly handle media/file uploads
# https://docs.djangoproject.com/en/1.11/ref/models/fields/#django.db.models.FileField
class Attachment(models.Model):
  attachment_file = models.FileField()

@python_2_unicode_compatible
class Order(models.Model):
	# Status choices.
	RECEIVED_REVIEWING = 'RR'
	PROCESSING = 'PR'
	QUALITY_CHECK = 'QA'
	READY_FOR_PICKUP = 'RP'
	# TODO(loganesian): Add status for shipment?
	ORDER_COMPLETE = 'CP'
	ORDER_STATUS = (
			(RECEIVED_REVIEWING, 'Under review pending confirmation'),
			(PROCESSING, 'Processing'),
			(QUALITY_CHECK, 'Quality check'),
			(READY_FOR_PICKUP, 'Ready for pickup'),
			(ORDER_COMPLETE, 'Order complete and picked up'),
	)

	# Fields.
	customer = models.ForeignKey(Customer, on_delete=models.CASCADE)
	company = models.ForeignKey(Company, models.SET_NULL, blank=True, null=True)
	product = models.ForeignKey(CustomerProduct, on_delete=models.CASCADE)
	order_attachments = models.ManyToManyField(Attachment)
	customer_product_description = models.TextField()
	total_price = models.DecimalField(max_digits=10, decimal_places=2)
	notification_opt_in = models.BooleanField('Notifications opt-in', default=False)
	status = models.CharField(max_length=2, choices=ORDER_STATUS)
	# TODO(loganesian): Figure out a way to link this to OrderComment.
	manufacturer_product_notes = models.TextField()
	order_placement_date = models.DateTimeField(auto_now_add=True)
	est_order_completion_date = models.DateTimeField()
	# TODO(loganesian): Invoice or payment date.
	invoice_date = models.DateTimeField()
	# TODO(loganesian): Should this be included?
	product_pickup_shipment_data = models.DateTimeField()

	def __str__(self):
		return "{0} order: {1}".format(self.customer, self.product)

# TODO(loganesian): User is company employee or a customer?
@python_2_unicode_compatible
class OrderComment(models.Model):
	order = models.ForeignKey(Order, on_delete=models.CASCADE)
	user = models.ForeignKey(User, on_delete=models.CASCADE)
	content = models.TextField()
	timestamp = models.DateTimeField(auto_now_add=True)

	def __str__(self):
		return "{0} -- {1}: {2}".format(self.order, self.user, self.content)
