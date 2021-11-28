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

<div style="position:relative; top:60px; right:-150px">

  <table bgcolor="grey" border="10px">
    <tr>
      <th style="padding: 30px">Name</th>
      <th style="padding: 30px">Email</th>
      <!-- <th style="padding: 30px">Role</th> -->
      <th style="padding: 50px">Action</th>
    </tr>
    @foreach($data as $data)
    <tr align="center">
      <td>{{$data->name}}</td>
      <td>{{$data->email}}</td>
      <!-- <td>User</td> -->
      <td> <a href=""> Delete</td>
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
