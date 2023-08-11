<!DOCTYPE html>
<html lang="en">
  <head>
      @include('admin.css')
  </head>
  <body>  
      @include('admin.sidebar')
      @include('admin.navbar')


      <div class="container-fluid page-body-wrapper">
        <div class="container" align="center">

            <table>

                <tr style="background-color:gray">

                    <td style="padding: 20px">Title </td>
                    <td style="padding: 20px">Description </td>
                    <td style="padding: 20px">Quntity </td>
                    <td style="padding: 20px">Price </td>
                    <td style="padding: 20px">Image </td>

                </tr>

                <tr style="background-color:black; align-items:center;">

                    <td>Title </td>
                    <td>Description </td>
                    <td>Quntity </td>
                    <td>Price </td>
                    <td>Image </td>

                </tr>

            </table>

        </div>

      </div>
   
      @include('admin.script')    
  </body>
</html>
