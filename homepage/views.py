from django.shortcuts import render

# Create your views here.
def index(request):
  return render(request, 'homepage/index.html')

def machine_detail(request, machine_name):
  template = 'homepage/{0}.html'.format(machine_name)
  return render(request, template)
