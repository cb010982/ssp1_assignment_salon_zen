<!-- resources/views/cart.blade.php -->

@extends('layouts.beautymanager')

@section('content')
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <h2 class="mb-4">Your Cart</h2>
                    <!-- Other Cart Details Go Here -->
                </div>
            </div>
            @foreach($cartItems as $item)
                @if(!empty($item->cart_data))
                    <div class="mb-4">
                        <strong>Customer order {{ $item->id }} </strong>
                        <table class="table mt-3">
                            <!-- Include thead only for the first iteration -->
                            @if($loop->first)
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Price</th>
                                    </tr>
                                </thead>
                            @endif
                            <tbody>
                                @php
                                    $totalAmount = 0;
                                @endphp
                                @foreach(json_decode($item->cart_data, true) as $product)
                                    <tr>
                                        <td>{{ $product['name'] }}</td>
                                        <td>{{ $product['quantity'] }}</td>
                                        <td>${{ $product['price'] }}</td>
                                    </tr>
                                    @php
                                        $totalAmount += $product['price'];
                                    @endphp
                                @endforeach
                                <!-- Add a row for the grand total -->
                                <tr>
                                    <td colspan="2"><strong>Grand Total:</strong></td>
                                    <td><strong>${{ $totalAmount }}</strong></td>
                                    
                                </tr>
                            </tbody>
                        </table>
                        
                        <!-- Add Confirm and Decline buttons -->
                        <div class="text-right">
                       <!-- Add Confirm and Decline buttons -->
                        <div id="buttons{{ $item->id }}" class="text-right">
                        <!-- Add Confirm and Decline buttons -->
                        @if($item->status == 'PENDING')
    <!-- Add Confirm and Decline buttons -->
    <div id="buttons{{ $item->id }}" class="text-right">
        <a href="/cart/{{ $item->id }}/accept" class="btn btn-outline-success" onclick="confirmOrder({{ $item->id }}); return false;">Confirm Order</a>
        <a href="/cart/{{ $item->id }}/decline" class="btn btn-outline-danger" onclick="declineOrder({{ $item->id }}); return false;">Decline Order</a>
    </div>
@endif

                        </div>
                        <!-- Add Confirm and Decline messages -->
                        <div id="confirmMessage{{ $item->id }}" style="display: none;" class="text-right">
                            <p class="text-success"><strong> ORDER CONFIRMED</strong></p>
                        </div>
                        <div id="declineMessage{{ $item->id }}" style="display: none;" class="text-right">
                            <p class="text-danger"><strong>ORDER DECLINED</strong></p>
                        </div>
                        <p>Customer order {{ $item->status }} </p>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </section>

    <script>
function confirmOrder(orderId) {
    $.ajax({
        url: '/cart/' + orderId + '/accept',
        type: 'GET',
        success: function(response) {
         
            document.getElementById('buttons' + orderId).style.display = 'none';
           
            document.getElementById('confirmMessage' + orderId).style.display = 'block';
        }
    });
}

function declineOrder(orderId) {
    $.ajax({
        url: '/cart/' + orderId + '/decline',
        type: 'GET',
        success: function(response) {
            // Hide the buttons
            document.getElementById('buttons' + orderId).style.display = 'none';
            // Show the declined message
            document.getElementById('declineMessage' + orderId).style.display = 'block';
        }
    });
}

    </script>
@endsection

