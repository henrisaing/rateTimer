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
                        <!-- table 1 -->
                        <!-- <tr>
                          <td>1</td>
                          <td>1</td>
                          <td>8</td>
                          <td><button type="button" name="button1" id="button1">Start Table</button></td>
                          <td class="ct1">Time Holder</td>
                          <td class="total1">Total Holder</td>
                        </tr>

                        <tr>
                          <td>2</td>
                          <td>1</td>
                          <td>8</td>
                          <td><button type="button" name="button1" id="button2">Start Table</button></td>
                          <td>Time Holder</td>
                          <td class="total1">Total Holder</td>
                        </tr>

                        <tr>
                          <td>3</td>
                          <td>1</td>
                          <td>8</td>
                          <td><button type="button" name="button1" id="button3">Start Table</button></td>
                          <td>Time Holder</td>
                          <td class="total1">Total Holder</td>
                        </tr>

                        <tr>
                          <td>4</td>
                          <td>1</td>
                          <td>8</td>
                          <td><button type="button" name="button1" id="button4">Start Table</button></td>
                          <td>Time Holder</td>
                          <td class="total1">Total Holder</td>
                        </tr>

                        <tr>
                          <td>5</td>
                          <td>1</td>
                          <td>8</td>
                          <td><button type="button" name="button1" id="button5">Start Table</button></td>
                          <td>Time Holder</td>
                          <td>Total Holder</td>
                        </tr>

                        <tr>
                          <td>6</td>
                          <td>1</td>
                          <td>8</td>
                          <td><button type="button" name="button1" id="button6">Start Table</button></td>
                          <td>Time Holder</td>
                          <td>Total Holder</td>
                        </tr>

                        <tr>
                          <td>7</td>
                          <td>1</td>
                          <td>8</td>
                          <td><button type="button" name="button1" id="button7">Start Table</button></td>
                          <td>Time Holder</td>
                          <td>Total Holder</td>
                        </tr>

                        <tr>
                          <td>8</td>
                          <td>1</td>
                          <td>8</td>
                          <td><button type="button" name="button1" id="button8">Start Table</button></td>
                          <td>Time Holder</td>
                          <td>Total Holder</td>
                        </tr>

                        <tr>
                          <td>9</td>
                          <td>1</td>
                          <td>8</td>
                          <td><button type="button" name="button1" id="button9">Start Table</button></td>
                          <td>Time Holder</td>
                          <td>Total Holder</td>
                        </tr>

                        <tr>
                          <td>10</td>
                          <td>1</td>
                          <td>8</td>
                          <td><button type="button" name="button1" id="button10">Start Table</button></td>
                          <td>Time Holder</td>
                          <td>Total Holder</td>
                        </tr>

                        <tr>
                          <td>11</td>
                          <td>1</td>
                          <td>8</td>
                          <td><button type="button" name="button1" id="button11">Start Table</button></td>
                          <td>Time Holder</td>
                          <td>Total Holder</td>
                        </tr> -->
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


<!-- <div class="panel panel-default">
                    <div class="panel-heading">
                      Current Inventory
                    </div>

                    <div class="panel-body">
                      <table class="table table-striped item-table">

                        <! table headings -->
                        <!-- <thead>
                          <th>Item</th>
                          <th>Stock</th>
                          <th>Last Updated</th>
                        </thead> -->

                        <!-- table body -->
                        <!-- <tbody> -->
                            <!-- <tr> -->
                              <!-- item name -->
                              <!-- <td> -->
