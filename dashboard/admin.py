from django.contrib import admin

from .models import *

# Register your models here.
admin.site.register(Customer)
admin.site.register(Company)
admin.site.register(Order)
admin.site.register(Product)
admin.site.register(CustomerProduct)
admin.site.register(JewelryType)
admin.site.register(FinishType)
admin.site.register(MetalType)
