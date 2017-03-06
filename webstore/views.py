from django.shortcuts import render
from django.http import HttpResponse
from django.views.generic.edit import CreateView, UpdateView, DeleteView, FormView

from dashboard import models
from . import forms

# Create your views here.
def index(request):
  return HttpResponse("Hello world.")

class purchase_order(FormView):
  template_name = 'webstore/purchase_order.html'
  form_class = forms.OrderForm
  success_url = 'webstore/confirmation.html'

#class purchase_order(CreateView):
#  template_name = 'webstore/purchase_order.html'
#  form_class = forms.OrderForm
#  model = models.Order

def confirmation(request):
  return render(request, 'webstore/confirmation.html')
