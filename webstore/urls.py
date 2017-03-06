from django.conf.urls import url

from . import views

app_name = 'webstore'
urlpatterns = [url(r'^$', views.purchase_order.as_view(), name='purchase-order'),
               url(r'^confirmation/$', views.confirmation, name='confirmation'),]
