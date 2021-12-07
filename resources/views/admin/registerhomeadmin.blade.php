<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <title></title>
  </head>
  <body>

    <x-app-layout>

    </x-app-layout>


    <!DOCTYPE html>
    <html lang="en">
      <head>

      </head>
      <body>
        <div class="container-scroller">
      @include("admin.navbar")

<div style="position:relative; top:60px; right:-1px">

  <table bgcolor="grey" border="1px" width: "100%" border-collapse: "collapse">
    <tr >
      <th style="padding: 10px">Name</th>
      <th style="padding: 10px">Category</th>
      <th style="padding: 10px">Phone Number</th>
        <th style="padding: 10px">Email</th>
      <th style="padding: 10px">Location</th>
        <th style="padding: 10px">Image/Logo</th>
          <th style="padding: 10px">Description</th>


    </tr>
    @foreach($registerhomedata as $registerhomedata)
    <tr align="center">
      <td>{{$registerhomedata->name}}</td>
      <td>{{$registerhomedata->category}}</td>
      <td>{{$registerhomedata->phone}}</td>
      <td>{{$registerhomedata->email}}</td>
      <td>{{$registerhomedata->location}}</td>
      <td>{{$registerhomedata->image}}</td>
      <td>{{$registerhomedata->description}}</td>
    </tr>
    @endforeach
  </table>
</div>



      </div>
      @include("admin.admincss")
      @include("admin.adminscript")
            <!-- main-panel ends -->
          </div>
          <!-- page-body-wrapper ends -->
        </div>
        <!-- container-scroller -->
        <!-- plugins:js -->

      </body>
    </html>

  </body>
</html>
