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
  customer_name = models.CharField('Name', max_length=100)
  email = models.EmailField()
  phone_number = models.CharField('Phone', max_length=20)
  address = models.ForeignKey(Address, on_delete=models.SET_NULL, blank=True,
                              null=True)
  method_of_contact = models.CharField(max_length=10, choices=CONTACT_METHODS, default=EMAIL)
  notifications_opt_in = models.BooleanField('Notifications opt-in', default=False)

  def __str__(self):
    return self.customer_name

@python_2_unicode_compatible
class CustomerCompany(models.Model):
  company_name = models.CharField('Name', max_length=100)
  company_phone = models.CharField('Phone', max_length=20, blank=True)
  # TODO(loganesian): Should the company be deleted if its address is deleted?
  # Else we just end up with a blank address field.
  address = models.ForeignKey(Address, on_delete=models.SET_NULL, blank=True,
                              null=True)
  resale_number = models.CharField(max_length=50)
  # TODO(loganesian): Not entirely sure if this should default to being null or
  # just the company phone number.
  point_of_contact = models.ForeignKey(Customer, on_delete=models.SET_DEFAULT,
                                       default=self.company_phone)

  def __str__(self):
    return self.company_name

# TODO(loganesian): Implement or delete.
class PointsOfContact(models.Model):
  pass

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
  customer_product = models.ForeignKey(CustomerProduct, on_delete=models.CASCADE)
  # TODO(loganesian): Read the difference b/w FileField and ImageField and
  # determine which approach is better.
  # 
  photograph = models.FileField()
  customer_product_description = models.TextField()
  total_price = models.DecimalField()
  notification_opt_in = models.BooleanField('Notifications opt-in', default=False)
  status = models.CharField(max_length=2, choices=ORDER_STATUS)
  manufacturer_product_notes = models.TextField()
  order_placement_date = models.DateTimeField(auto_now_add=True)
  est_order_completion_date = models.DateTimeField()
  # TODO(loganesian): Invoice or payment date.
  invoice_date = models.DateTimeField()
  product_pickup_shipment_data = models.DateTimeField()

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
  jewelry_type = 
  style_number = 
  metal_types = 
  finish_types = 
  available_sizes = 
  available_lengths = 
  unit_price = models.DecimalField()

@python_2_unicode_compatible
class CustomerProduct(models.Model):
  order = models.ForeignKey(Orders, on_delete=models.CASCADE)
  base_product = models.ForeignKey(Products, on_delete=
  unit_number = models.IntegerField()
  size = 
  length = 
  finish_type
  metal_type
