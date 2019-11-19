@extends('user.layouts.app')

@section('content')
<section class="section breadcrumbs-custom">
        <div class="breadcrumbs-custom-main bg-image bg-primary">
          <div class="container">
            <h3 class="breadcrumbs-custom-title">User Dashboard</h3>
          </div>
        </div>
        <div class="breadcrumbs-custom-aside">
          <div class="container">
            <ul class="breadcrumbs-custom-path">
              <li><a href="index.html">Home</a></li>
              <li><a href="#">Dashboard</a></li>
            </ul>
          </div>
        </div>
      </section>
<table class="table table-primary table-responsive-md container text-center">
        <thead>
          <tr>
            <th>Test Name</th>
            <th>Attempted On</th>
            <th>Score</th>
            <th>Result</th>
          </tr>
        </thead>
        <tbody>
        <tr>
            <td>Accenture Test 1</td>
            <td>18 - 02 - 2009</td>
            <td>59/70&emsp;<div class="button button-primary button-round-1" style="padding: 8px">Certificate</div></td>
            <td><span style="color: seagreen">Pass</span></td>
          </tr>
          <tr>
            <td>Item #2</td>
            <td>Description</td>
            <td>Discount</td>
            <td>$3.00</td>
          </tr>
          <tr>
            <td>Accenture Test 1</td>
            <td>18 - 02 - 2009</td>
            <td>59/70&emsp;<div class="button button-primary button-round-1" style="padding: 8px">Certificate</div></td>
            <td><span style="color: seagreen">Pass</span></td>
          </tr>
          <tr>
            <td>Item #4</td>
            <td>Description</td>
            <td>Tax</td>
            <td>$4.00</td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <td>All Items</td>
            <td>Description</td>
            <td>Your Total</td>
            <td>$13.00</td>
          </tr>
        </tfoot>
      </table>
    
    <p style="color: #000">&emsp;&emsp;Seems you need to Focus More and Improve your skills. Go Premium and Assure your path to Success</p><br>
@endsection
