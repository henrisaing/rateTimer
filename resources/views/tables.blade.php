<!-- resources/views/tables.blade.php -->
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                  Time: <div class="clock"></div>
                </div>
            </div>

                <div class="panel-body">
                    <table class="table table-striped tables-table">

                      <!-- table headings -->
                      <thead>
                        <th>Table Number</th>
                        <th>People</th>
                        <th>Rate</th>
                        <th>Start / Stop</th>
                        <th>Start Time</th>
                        <th>Current Time</th>
                        <th>Total</th>
                      </thead>

                      <!-- table body -->
                      <tbody>

                        <?php for($i = 1; $i < 12; $i++): ?>
                          <tr class="row<?php print $i ;?>">
                            <td><?php print $i ;?></td>
                            <td>1</td>
                            <td class="rate<?php print $i ;?>">8</td>
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
        </div>
    </div>
</div>
@endsection
