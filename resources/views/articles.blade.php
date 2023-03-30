<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    

      <title>Articles</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        
 <body>
        <table class="border-separate border border-slate-500 ...">
  <thead>
    <tr>
      <th class="border border-slate-600 ...">State</th>
      <th class="border border-slate-600 ...">City</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="border border-slate-700 ...">Indiana</td>
      <td class="border border-slate-700 ...">Indianapolis</td>
    </tr>
    <tr>
      <td class="border border-slate-700 ...">Ohio</td>
      <td class="border border-slate-700 ...">Columbus</td>
    </tr>
    <tr>
      <td class="border border-slate-700 ...">Michigan</td>
      <td class="border border-slate-700 ...">Detroit</td>
    </tr>
  </tbody>
</table>

        <div >

            <h1  class="sm:text-center">Liste d'article</h1>
             @foreach($title as $titl)
            <h2>{{ $titl }}</h2>
              @endforeach

        </div>
       
        
<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>

</body>
</html> 