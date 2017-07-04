<!-- resources/views/tables.blade.php -->
@extends('layouts.table')
@section('content')

@if (Auth::guest())
  <input type="hidden" id="logged" value="false">
@else
  <input type="hidden" id="logged" value="true">
@endif

<div class="contain contain-black">
  <div class="header header-grey">
    <div class="clock"></div>
  </div>
  <table class="">

    <!-- table headings -->
    <thead>
      <th>Table</th>
      <th class="mobile-hide">People</th>
      <th class="mobile-hide">Rate</th>
      <th>Start / Stop</th>
      <th class="mobile-hide">Start Time</th>
      <th>Timer</th>
      <th>Total</th>
    </thead>

    <!-- table body -->
    <tbody>
    <form action="/update" id="form-tables" method="post">
    {{ csrf_field() }}

    <?php if ($hasTables): ?>
      <?php foreach ($tables as $table): ?>
        <tr class="row{{$table->name}} <?php if($table->status != 'Inactive'): print("highlight");endif; ?>" >
          <td>{{$table->name}}</td>
          <input type="hidden" name="name[]" value="{{$table->name}}">

          <td class="mobile-hide">1</td>
          <td class="rate{{$table->name}} mobile-hide">8</td>

          <td><button type="button" id="{{$table->name}}">{{$table->button}}</button></td>
          <input type="hidden" name="button[]" id="button{{$table->name}}" value="{{$table->button}}">

          <td class="st{{$table->name}} mobile-hide">{{$table->status}}</td>
          <input type="hidden" name="status[]" id="status{{$table->name}}" value="{{$table->status}}">

          <td class="ct{{$table->name}}">0:00:00</td>
          <td class="total total{{$table->name}}">$0.00</td>
        </tr>
      <?php endforeach ?>
    <?php else: ?>
      <?php for($i = 1; $i < 12; $i++): ?>
        <tr class="row<?php print $i ;?>">
          <td><?php print $i ;?></td>
          <input type="hidden" name="name[]" value="<?php print $i ;?>">

          <td class="mobile-hide">1</td>
          <td class="rate<?php print $i ;?> mobile-hide">8</td>

          <td><button type="button" id="<?php print $i ;?> ">Start</button></td>
          <input type="hidden" name="button[]" id="button<?php print $i ;?>" value="Start">

          <td class="st<?php print $i ;?> mobile-hide">Inactive</td>
          <input type="hidden" name="status[]" id="status<?php print $i ;?>" value="Inactive">

          <td class="ct<?php print $i ;?>">0:00:00</td>
          <td class="total total<?php print $i ;?>">$0.00</td>
        </tr>
      <?php endfor; ?>
    <?php endif; ?>

    </form>

      <!-- <tr class="row1">
          <td>1</td>
          <td class="mobile-hide">1</td>
          <td class="rate1 mobile-hide">8</td>
          <td><button type="button" id="1">Start</button></td>
          <td class="st1 mobile-hide">Inactive</td>
          <td class="ct1">0:00:00</td>
          <td class="total total1">$0.00</td>
        </tr>

        <tr class="row2">
          <td>2</td>
          <td class="mobile-hide">1</td>
          <td class="rate2 mobile-hide">8</td>
          <td><button type="button" id="2">Start</button></td>
          <td class="st2 mobile-hide">Inactive</td>
          <td class="ct2">0:00:00</td>
          <td class="total total2">$0.00</td>
        </tr>

        <tr class="row3">
          <td>3</td>
          <td class="mobile-hide">1</td>
          <td class="rate3 mobile-hide">8</td>
          <td><button type="button" id="3 ">Start</button></td>
          <td class="st3 mobile-hide">Inactive</td>
          <td class="ct3">0:00:00</td>
          <td class="total total3">$0.00</td>
        </tr>

        <tr class="row4">
          <td>4</td>
          <td class="mobile-hide">1</td>
          <td class="rate4 mobile-hide">8</td>
          <td><button type="button" id="4 ">Start</button></td>
          <td class="st4 mobile-hide">Inactive</td>
          <td class="ct4">0:00:00</td>
          <td class="total total4">$0.00</td>
        </tr>

        <tr class="row5">
          <td>5</td>
          <td class="mobile-hide">1</td>
          <td class="rate5 mobile-hide">8</td>
          <td><button type="button" id="5 ">Start</button></td>
          <td class="st5 mobile-hide">Inactive</td>
          <td class="ct5">0:00:00</td>
          <td class="total total5">$0.00</td>
        </tr>

        <tr class="row6">
          <td>6</td>
          <td class="mobile-hide">1</td>
          <td class="rate6 mobile-hide">8</td>
          <td><button type="button" id="6 ">Start</button></td>
          <td class="st6 mobile-hide">Inactive</td>
          <td class="ct6">0:00:00</td>
          <td class="total total6">$0.00</td>
        </tr>

        <tr class="row7">
          <td>7</td>
          <td class="mobile-hide">1</td>
          <td class="rate7 mobile-hide">8</td>
          <td><button type="button" id="7 ">Start</button></td>
          <td class="st7 mobile-hide">Inactive</td>
          <td class="ct7">0:00:00</td>
          <td class="total total7">$0.00</td>
        </tr>

        <tr class="row8">
          <td>8</td>
          <td class="mobile-hide">1</td>
          <td class="rate8 mobile-hide">8</td>
          <td><button type="button" id="8 ">Start</button></td>
          <td class="st8 mobile-hide">Inactive</td>
          <td class="ct8">0:00:00</td>
          <td class="total total8">$0.00</td>
        </tr>

        <tr class="row9">
          <td>9</td>
          <td class="mobile-hide">1</td>
          <td class="rate9 mobile-hide">8</td>
          <td><button type="button" id="9 ">Start</button></td>
          <td class="st9 mobile-hide">Inactive</td>
          <td class="ct9">0:00:00</td>
          <td class="total total9">$0.00</td>
        </tr>

        <tr class="row10">
          <td>10</td>
          <td class="mobile-hide">1</td>
          <td class="rate10 mobile-hide">8</td>
          <td><button type="button" id="10 ">Start</button></td>
          <td class="st10 mobile-hide">Inactive</td>
          <td class="ct10">0:00:00</td>
          <td class="total total10">$0.00</td>
        </tr>

        <tr class="row11">
          <td>11</td>
          <td class="mobile-hide">1</td>
          <td class="rate11 mobile-hide">8</td>
          <td><button type="button" id="11 ">Start</button></td>
          <td class="st11 mobile-hide">Inactive</td>
          <td class="ct11">0:00:00</td>
          <td class="total total11">$0.00</td>
        </tr>

        <tr class="row12">
          <td>12</td>
          <td class="mobile-hide">1</td>
          <td class="rate12 mobile-hide">8</td>
          <td><button type="button" id="12 ">Start</button></td>
          <td class="st12 mobile-hide">Inactive</td>
          <td class="ct12">0:00:00</td>
          <td class="total total12">$0.00</td>
        </tr> -->

    </tbody>
  </table>
  
  </div>
</div>
@endsection
