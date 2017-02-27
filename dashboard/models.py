from __future__ import unicode_literals

from django.db import models
from django.utils.encoding import python_2_unicode_compatible

# Each model will have an automatic id field.
@python_2_unicode_compatible
class Address(models.Model):
  street_one = models.CharField(max_length=150)
  street_two = models.CharField(max_length=150, blank=True)
  city = models.CharField(max_length=150)
  state = models.CharField(max_length=150)
  zip_code = models.CharField(max_length=50)
  country = models.CharField(max_length=150)

  def __str__(self):
    pass

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
    return self.customer_name

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
    return self.company_name

@python_2_unicode_compatible
class PointsOfContact(models.Model):
  customer = models.ForeignKey(Customer, on_delete=models.CASCADE)
  company = models.ForeignKey(Company, on_delete=models.CASCADE)
  primary_poc = models.BooleanField('Primary point-of-contact', default=False)

@python_2_unicode_compatible
class Orders(models.Model):
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
      (COMPLETE, 'Order complete and picked up'),
  )

  # Fields.
  customer = models.ForeignKey(Customer, on_delete=models.CASCADE)
  company = models.ForeignKey(Company, models.SET_NULL, blank=True, null=True)
  product = models.ForeignKey(CustomerProduct, on_delete=models.CASCADE)
  order_file = models.FileField()
  customer_product_description = models.TextField()
  total_price = models.DecimalField()
  notification_opt_in = models.BooleanField('Notifications opt-in', default=False)
  status = models.CharField(max_length=2, choices=ORDER_STATUS)
  # TODO(loganesian): Figure out a way to link this to OrderComment.
  manufacturer_product_notes = models.TextField()
  order_placement_date = models.DateTimeField(auto_now_add=True)
  est_order_completion_date = models.DateTimeField()
  # TODO(loganesian): Invoice or payment date.
  invoice_date = models.DateTimeField()
  product_pickup_shipment_data = models.DateTimeField()

# TODO(loganesian): User is company employee or a customer?
class OrderComment(models.Model):
  order = models.ForeignKey(Order, on_delete=models.CASCADE)
  user
  content = models.TextField()
  timestamp = models.DateTimeField(auto_now_add=True)

class MetalTypes(models.Model):
  pass

class FinishTypes(models.Model):
  pass

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
  

class JewelrySizeSpecifications(models.Model):
  pass

@python_2_unicode_compatible
class Products(models.Model):
  style_number = models.AutoField(primary_key=True)
  jewelry_type = 
  metal_types = 
  finish_types = 
  available_sizes = 
  available_lengths = 
  unit_price = models.DecimalField()

@python_2_unicode_compatible
class CustomerProduct(models.Model):
  order = models.ForeignKey(Orders, on_delete=models.CASCADE)
  base_product = models.ForeignKey(Products, on_delete=models.CASCADE)
  unit_number = models.IntegerField()
  size = 
  length = 
  finish_type = 
  metal_type = 
