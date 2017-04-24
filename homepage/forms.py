from django import forms

class ContactForm(forms.Form):
  name = forms.CharField(max_length=100)
  subject = forms.CharField(max_length=100)
  message = forms.CharField(widget=forms.Textarea)
  sender_email = forms.EmailField()

  def __init__(self, *args, **kwargs):
    super(ContactForm, self).__init__(*args, **kwargs)
    for field in iter(self.fields):
      self.fields[field].widget.attrs.update({'class': 'form-control'})
    self.fields['message'].widget.attrs.update({'rows': '15'})
  
