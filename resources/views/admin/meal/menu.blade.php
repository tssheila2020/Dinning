@extends('layout.main')
@section('title', 'Menu')
@section('content')
<div class="main-content">
   <div class="section__content section__content--p30">
      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-12">
               <div class="table-responsive table--no-card m-b-30">
                  <table class="table table-borderless table-striped table-earning">
                     <thead>
                        <tr>
                           <th>Day</th>
                           <th>Type</th>
                           <th>Item</th>
                           <th class="text-right">price</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td>Sunday</td>
                           <td>Breakfast</td>
                           <td>Porota, Vaji, Dim</td>
                           <td class="text-right">45</td>
                        </tr>
                        <tr>
                           <td>Sunday</td>
                           <td>Lunch</td>
                           <td>Khicuri, Murgi</td>
                           <td class="text-right">88</td>
                        </tr>
                        <tr>
                           <td>Sunday</td>
                           <td>Dinner</td>
                           <td>Vaat, Daal, Alor vorta</td>
                           <td class="text-right">76</td>
                        </tr>
                        <tr>
                           <td>Monday</td>
                           <td>Breakfast</td>
                           <td>Teheri</td>
                           <td class="text-right">35</td>
                        </tr>
                        <tr>
                           <td>Monday</td>
                           <td>Lunch</td>
                           <td>Vaat, Daal, Mach</td>
                           <td class="text-right">60</td>
                        </tr>
                        <tr>
                           <td>Monday</td>
                           <td>Dinner</td>
                           <td>Vaat, Sobji, Daal</td>
                           <td class="text-right">55</td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection