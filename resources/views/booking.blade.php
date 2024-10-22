<h3>Thanks For Your Booking,</h3>
   <h4>Your Payment {{$data->price}} Is Recieved Successfully</h4>
   <h3>Booking Detail</h3>
   <table>
      <tbody>
          <tr>
              <td>Total Distance</td>
              <td>{{$data->distance}}</td>
          </tr>
          
          <tr>
              <td>From Address</td>
              <td>{{$data->from_address}}</td>
          </tr>
          <tr>
              <td>To Address</td>
              <td>{{$data->to_address}}</td>
          </tr>
          
          <tr>
              <td>Booking Date</td>
              <td>{{$data->booking_date}}</td>
          </tr> 
          
          <tr>
              <td>Booker Name</td>
              <td>{{$data->coll_name}}</td>
          </tr>
          <tr>
              <td>Pickup Phone</td>
              <td>{{$data->coll_phone}}</td>
          </tr>
          <tr>
              <td>Pickup Address</td>
              <td>{{$data->coll_address}}</td>
          </tr>
          <tr>
              <td>Reciever Name</td>
              <td>{{$data->deli_name}}</td>
          </tr>
          <tr>
              <td>Reciever Phone</td>
              <td>{{$data->deli_phone}}</td>
          </tr>
          <tr>
              <td>Delivery Address</td>
              <td>{{$data->deli_address}}</td>
          </tr>
      
          </tr>
      </tbody>
   </table>
   <h3>Login Site With Your Credentials to view Booking Status And Details</h3></h3>
