@extends('layouts.tema-store')


@section('background-image')
     <div id="headerwrap" name="home">
      <div id=""></div>
@endsection
 
@section('content')
  <h1>MUSICAL ST<span class="icon icon-radio-checked"></span>RE</h1>
      
  <h2 style="color: white ">La más amplia variedad de instrumentos</h2>
  <table class="table">
                    <thead>
                        <th>Instrumentos</th>
                        
                        
                    </thead>
                    <tbody>
                            <tr>
                              
                            
                                <td>
                                    @foreach($instrumentos as $instrumento)
                                     $instrumentos->nombre_instrumento<br>
                                     
                                   
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
  
@endsection