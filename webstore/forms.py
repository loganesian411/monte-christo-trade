from __future__ import unicode_literals

from dashboard.models import Order
from django.forms import ModelForm

# Define your forms here..
class OrderForm(ModelForm):
  #def __init__(self):
  #  super (OrderForm, self).__init__(*args, **kwargs)
  #  self.fields['MetalType']
  #  self.fields['Size']
  #  pass

  class Meta:
    model = Order
    fields = ['customer',
              'company',
              'product',
              'order_attachments',
              'customer_product_description',
              'notification_opt_in']
