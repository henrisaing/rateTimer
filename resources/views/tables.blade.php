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
      <th class="mobile-hide">People</th>
      <th class="mobile-hide">Rate</th>
      <th>Start / Stop</th>
      <th class="mobile-hide">Start Time</th>
      <th>Timer</th>
      <th>Total</th>
    </thead>

    <!-- table body -->
    <tbody>

      <?php for($i = 1; $i < 12; $i++): ?>
        <tr class="row<?php print $i ;?>">
          <td><?php print $i ;?></td>
          <td class="mobile-hide">1</td>
          <td class="rate<?php print $i ;?> mobile-hide">8</td>
          <td><button type="button" id="<?php print $i ;?> ">Start</button></td>
          <td class="st<?php print $i ;?> mobile-hide">Inactive</td>
          <td class="ct<?php print $i ;?>">0:00:00</td>
          <td class="total total<?php print $i ;?>">0.00</td>
        </tr>
      <?php endfor; ?>

    </tbody>
  </table>
  
  </div>
</div>
@endsection
