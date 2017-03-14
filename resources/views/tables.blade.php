<!-- resources/views/tables.blade.php -->
@extends('layouts.app')
@section('content')
<div class="contain contain-black">
  <div class="header header-grey">
    <div class="clock"></div>
  </div>
  <table class="">

    <!-- table headings -->
    <thead>
      <th>Table</th>
      <th class="people">People</th>
      <th class="rate">Rate</th>
      <th>Start / Stop</th>
      <th>Start Time</th>
      <th>Timer</th>
      <th>Total</th>
    </thead>

    <!-- table body -->
    <tbody>

      <?php for($i = 1; $i < 12; $i++): ?>
        <tr class="row<?php print $i ;?>">
          <td><?php print $i ;?></td>
          <td class="people">1</td>
          <td class="rate<?php print $i ;?> rate">8</td>
          <td><button type="button" id="<?php print $i ;?> ">Start</button></td>
          <td class="st<?php print $i ;?>">Inactive</td>
          <td class="ct<?php print $i ;?>">0:00:00</td>
          <td class="total total<?php print $i ;?>">$0.00</td>
        </tr>
      <?php endfor; ?>

    </tbody>
  </table>
  
  </div>
</div>
@endsection
