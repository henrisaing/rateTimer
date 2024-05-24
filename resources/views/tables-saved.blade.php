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

          <td class="ppl{{$table->name}} mobile-hide" contentEditable="true">1</td>
          <td class="rate{{$table->name}} mobile-hide" contentEditable="true">8</td>

          <td><button type="button" id="{{$table->name}}">{{$table->button}}</button></td>
          <input type="hidden" name="button[]" id="button{{$table->name}}" value="{{$table->button}}">

          <td class="st{{$table->name}} mobile-hide">{{$table->status}}</td>
          <input type="hidden" name="status[]" id="status{{$table->name}}" value="{{$table->status}}">

          <td class="ct{{$table->name}}">0:00:00</td>
          <td class="total total{{$table->name}}">0.00</td>
        </tr>
      <?php endforeach ?>
    <?php else: ?>
      <?php for($i = 1; $i < 12; $i++): ?>
        <tr class="row<?php print $i ;?>">
          <td><?php print $i ;?></td>
          <input type="hidden" name="name[]" value="<?php print $i ;?>">

          <td class="ppl<?php print $i ;?> mobile-hide" contentEditable="true">1</td>
          <td class="rate<?php print $i ;?> mobile-hide" contentEditable="true">8</td>

          <td><button type="button" id="<?php print $i ;?> ">Start</button></td>
          <input type="hidden" name="button[]" id="button<?php print $i ;?>" value="Start">

          <td class="st<?php print $i ;?> mobile-hide">Inactive</td>
          <input type="hidden" name="status[]" id="status<?php print $i ;?>" value="Inactive">

          <td class="ct<?php print $i ;?>">0:00:00</td>
          <td class="total total<?php print $i ;?>">0.00</td>
        </tr>
      <?php endfor; ?>
    <?php endif; ?>

    </form>
    </tbody>
  </table>
  
  </div>
</div>
@endsection
