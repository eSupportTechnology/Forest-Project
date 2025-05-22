@extends ('VendorDashboard.Vendormaster')

@section('content')
<div class="content-header">
    <div>
        <h2 class="content-title card-title">Order List</h2>
    </div>
</div>

<!-- Tabs for Sections -->
<ul class="nav nav-tabs mb-3" id="orderTabs" role="tablist">
    <li class="nav-item">
        <a class="nav-link {{ request('status') === 'All' || !request('status') ? 'active' : '' }}" href="{{ route('vendor.orders', ['status' => 'All']) }}">All Orders</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ request('status') === 'Pending' ? 'active' : '' }}" href="{{ route('vendor.orders', ['status' => 'Pending']) }}">Pending Orders</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ request('status') === 'Accepted' ? 'active' : '' }}" href="{{ route('vendor.orders', ['status' => 'Accepted']) }}">Accepted Orders</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ request('status') === 'Packed' ? 'active' : '' }}" href="{{ route('vendor.orders', ['status' => 'Packed']) }}">Packed Orders</a>
    </li>
</ul>

<!-- Order Table -->
<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Order Code</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Total</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th class="text-end">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($orders as $order)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $order->order_code }}</td>
                            <td><b>{{ $order->customer_name }}</b></td>
                            <td>{{ $order->email }}</td>
                            <td>Rs. {{ number_format($order->total_cost, 2) }}</td>
                            <td>
                                <span class="status {{ strtolower(str_replace(' ', '-', $order->status)) }}">
                                    {{ $order->status }}
                                </span>
                            </td>
                            <td>{{ $order->date }}</td>
                            <td class="text-end">
                                <a href="{{ route('vendor.order-details', $order->order_code) }}" class="btn btn-view btn-sm">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="text-center">No orders found for this section.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

<style>
    .status.packed {
        background-color: #0275d8; /* Blue for Packed */
        color: white;
        padding: 5px 10px;
        border-radius: 5px;
    }

    /* Pickup Done Status */
    .status.pickup-done {
        background-color: #5bc0de; /* Light Blue for Pickup Done */
        color: white;
        padding: 5px 10px;
        border-radius: 5px;
    }

    /* Ready to Ship Status */
    .status.ready-to-ship {
        background-color: #f0ad4e; /* Orange for Ready to Ship */
        color: white;
        padding: 5px 10px;
        border-radius: 5px;
    }

    /* In Transit Status */
    .status.in-transit {
        background-color: #6f42c1; /* Purple for In Transit */
        color: white;
        padding: 5px 10px;
        border-radius: 5px;
    }
</style>

<!-- Pagination -->
<div class="pagination-area mt-15 mb-50">
    {{ $orders->links() }}
</div>


<script>
function submitForm() {
    document.getElementById('orderSearchForm').submit();
}
</script>
@endsection
