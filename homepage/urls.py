from django.conf.urls import url

from . import views

app_name = 'homepage'
urlpatterns = [url(r'^$', views.index, name='index'),
               url(r'^machines/(?P<machine_name>\w+)/$',
                   views.machine_detail,
                   name='machine-detail'),]
