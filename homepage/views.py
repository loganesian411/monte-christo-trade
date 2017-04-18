from django.core.mail import send_mail
from django.http import HttpResponse, HttpResponseRedirect
from django.shortcuts import render
from django.urls import reverse

import forms

# Create your views here.
def index(request):
  if request.method == 'POST':
    contact_form = forms.ContactForm(request.POST)
    if contact_form.is_valid():
      name = contact_form.cleaned_data['name']
      subject = contact_form.cleaned_data['subject']
      sender_email = contact_form.cleaned_data['sender_email']
      message = contact_form.cleaned_data['message']
      send_mail(subject, message, sender_email, ['test@example.com'])
      return HttpResponseRedirect(reverse('homepage:message-success'))
  else:
	  contact_form = forms.ContactForm()
  return render(request, 'homepage/index.html', {'form': contact_form})

def message_success(request):
  return HttpResponse(('Thank you for contacting us! We will get back to you as soon as possible'))

def machine_detail(request, machine_name):
  template = 'homepage/{0}.html'.format(machine_name)
  return render(request, template)
