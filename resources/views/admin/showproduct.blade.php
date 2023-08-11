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

                @foreach ($data as $product)
                    
                

                <tr style="background-color:black; align-items:center;">

                    <td>{{ $product->title }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td>{{ $product->price }}</td>
                    <td>
                        <img height="200" width="200" src="/productimage/{{ $product->image }}">
                    </td>

                </tr>

                @endforeach

            </table>

        </div>

      </div>
   
      @include('admin.script')    
  </body>
</html>
