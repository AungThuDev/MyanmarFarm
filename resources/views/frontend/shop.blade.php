@extends('frontend.template')
@section('content')
                           <select id="languageSelector" onchange="changeLanguage(this.value)">
                              <option value="en">English 🇺🇸</option>
                              <option value="my">Myanmar 🇲🇲</option>
                           </select>
@endsection
@section('extra-js')
<script>
         
         var currentLanguage = window.location.pathname.split('/')[1];

         // Set the selected option in the language selector
         document.getElementById('languageSelector').value = currentLanguage;

         function changeLanguage(lang) {
            var currentRoute = "{{ Route::currentRouteName() }}";
            var newUrl = `/${lang}/${currentRoute}`;
            console.log(currentRoute);
            window.location.href = newUrl;
         }

         
     
   </script>
@endsection