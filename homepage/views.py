from django.shortcuts import render

# Create your views here.
def index(request):
  context = {'display_text': ['hello', 'world', 'leggo']}
  return render(request, 'homepage/index.html', context)
