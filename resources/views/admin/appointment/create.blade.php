@extends('admin.layouts.master')

@section('content')
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="ik ik-edit bg-blue"></i>
                    <div class="d-inline">
                        <h5>Doctors</h5>
                        <span>appointment time</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <nav class="breadcrumb-container" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="../index.html"><i class="ik ik-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#">Doctor</a></li>
                        <li class="breadcrumb-item active" aria-current="page"></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="card">
            <div class="card-header">
                Chose date
            </div>
            <div class="card-body">
                <input type="text" class="form-control datetimepicker-input" id="datetime" data-toggle="datetimepicker" data-target="#datepicker">
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                Chose Am time
                <span style="margin-left: 700px">Check/Uncheck
                    <input type="checkbox" onclick=" for(c in document.getElementsByName('time[]')) document.getElementsByName('time[]').item(c).checked=this.checked">
                </span>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td><input type="checkbox" name="time[]" class="form-control" value="6am">6am</td>
                        <td><input type="checkbox" name="time[]" class="form-control" value="6.20am">6.20am</td>
                        <td><input type="checkbox" name="time[]" class="form-control" value="6.40am">6.40am</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td><input type="checkbox" name="time[]" class="form-control" value="7am">7am</td>
                        <td><input type="checkbox" name="time[]" class="form-control" value="7.20am">7.20am</td>
                        <td><input type="checkbox" name="time[]" class="form-control" value="7.40am">7.40am</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td><input type="checkbox" name="time[]" class="form-control" value="8am">8am</td>
                        <td><input type="checkbox" name="time[]" class="form-control" value="8.20am">8.20am</td>
                        <td><input type="checkbox" name="time[]" class="form-control" value="8.40am">8.40am</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td><input type="checkbox" name="time[]" class="form-control" value="9am">9am</td>
                        <td><input type="checkbox" name="time[]" class="form-control" value="9.20am">9.20am</td>
                        <td><input type="checkbox" name="time[]" class="form-control" value="9.40am">9.40am</td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td><input type="checkbox" name="time[]" class="form-control" value="10am">10am</td>
                        <td><input type="checkbox" name="time[]" class="form-control" value="10.20am">10.20am</td>
                        <td><input type="checkbox" name="time[]" class="form-control" value="10.40am">10.40am</td>
                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td><input type="checkbox" name="time[]" class="form-control" value="11am">11am</td>
                        <td><input type="checkbox" name="time[]" class="form-control" value="11.20am">11.20am</td>
                        <td><input type="checkbox" name="time[]" class="form-control" value="11.40am">11.40am</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="card">
                <div class="card-header">
                    Chose Pm time
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <tbody>
                        <tr>
                            <th scope="row">7</th>
                            <td><input type="checkbox" name="time[]" class="form-control" value="12pm">12pm</td>
                            <td><input type="checkbox" name="time[]" class="form-control" value="12.20m">12.20am</td>
                            <td><input type="checkbox" name="time[]" class="form-control" value="12.40am">12.40am</td>
                        </tr>
                        <tr>
                            <th scope="row">8</th>
                            <td><input type="checkbox" name="time[]" class="form-control" value="1pm">1pm</td>
                            <td><input type="checkbox" name="time[]" class="form-control" value="1.20pm">1.20pm</td>
                            <td><input type="checkbox" name="time[]" class="form-control" value="1.40pm">1.40pm</td>
                        </tr>
                        <tr>
                            <th scope="row">9</th>
                            <td><input type="checkbox" name="time[]" class="form-control" value="2pm">2pm</td>
                            <td><input type="checkbox" name="time[]" class="form-control" value="2.20pm">2.20pm</td>
                            <td><input type="checkbox" name="time[]" class="form-control" value="2.40pm">2.40pm</td>
                        </tr>
                        <tr>
                            <th scope="row">10</th>
                            <td><input type="checkbox" name="time[]" class="form-control" value="3pm">3pm</td>
                            <td><input type="checkbox" name="time[]" class="form-control" value="3.20pm">3.20pm</td>
                            <td><input type="checkbox" name="time[]" class="form-control" value="3.20pm">3.40pm</td>
                        </tr>
                        <tr>
                            <th scope="row">11</th>
                            <td><input type="checkbox" name="time[]" class="form-control" value="4pm">4pm</td>
                            <td><input type="checkbox" name="time[]" class="form-control" value="4.20pm">4.20pm</td>
                            <td><input type="checkbox" name="time[]" class="form-control" value="4.40pm">4.40pm</td>
                        </tr>
                        <tr>
                            <th scope="row">12</th>
                            <td><input type="checkbox" name="time[]" class="form-control" value="5pm">5pm</td>
                            <td><input type="checkbox" name="time[]" class="form-control" value="5.20pm">5.20pm</td>
                            <td><input type="checkbox" name="time[]" class="form-control" value="5.40pm">5.40pm</td>
                        </tr>
                        <tr>
                            <th scope="row">13</th>
                            <td><input type="checkbox" name="time[]" class="form-control" value="6pm">6pm</td>
                            <td><input type="checkbox" name="time[]" class="form-control" value="6.20pm">6.20pm</td>
                            <td><input type="checkbox" name="time[]" class="form-control" value="7.20pm">7.40pm</td>
                        </tr>
                        <tr>
                            <th scope="row">14</th>
                            <td><input type="checkbox" name="time[]" class="form-control" value="8pm">8pm</td>
                            <td><input type="checkbox" name="time[]" class="form-control" value="8.20pm">8.20pm</td>
                            <td><input type="checkbox" name="time[]" class="form-control" value="8.40pm">8.40pm</td>
                        </tr>
                        <tr>
                            <th scope="row">15</th>
                            <td><input type="checkbox" name="time[]" class="form-control" value="9pm">9pm</td>
                            <td><input type="checkbox" name="time[]" class="form-control" value="9.20pm">9.20pm</td>
                            <td><input type="checkbox" name="time[]" class="form-control" value="9.40pm">9.40pm</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
        </div>
    </div>
<style type="text/css">
    /*input[type="checkbox"]{*/
    /*    zoom: 0.5;*/
    /*}*/

    body{
        font-size: 20px;
    }
</style>
@endsection
