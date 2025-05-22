@extends('frontend.master')

@section('content')

  <!-- ========================= Breadcrumb Start =============================== -->
  <div class="breadcrumb mb-0 py-26 bg-main-two-50">
    <div class="container container-lg">
        <div class="breadcrumb-wrapper flex-between flex-wrap gap-16">
            <h6 class="mb-0">My Wishlist</h6>
            <ul class="flex-align gap-8 flex-wrap">
                <li class="text-sm">
                    <a href="{{ route('home') }}" class="text-gray-900 flex-align gap-8 hover-text-main-600">
                        <i class="ph ph-house"></i>
                        Home
                    </a>
                </li>
                <li class="flex-align">
                    <i class="ph ph-caret-right"></i>
                </li>
                <li class="text-sm text-main-600"> Wishlist </li>
            </ul>
        </div>
    </div>
  </div>
  <!-- ========================= Breadcrumb End =============================== -->

  <!-- ================================ Wishlist Section Start ================================ -->
  <section class="wishlist py-80">
    <div class="container container-lg">
        @if($wishlistItems->isEmpty())
            <!-- Display the empty wishlist message -->
            <div class="cart-empty-card text-center border border-gray-100 rounded-8 py-48 px-40 bg-light">
                <i class="material-icons text-6xl mb-24">favorite</i>
                <h3 class="text-lg fw-semibold mb-16">Your wishlist is empty.</h3>
                @if(!auth()->check())
                    <p class="mb-24">Sign in to view your wishlist and start shopping.</p>
                    <a href="{{ route('login') }}" class="btn btn-main py-12 w-50 rounded-8">Sign In</a>
                @else
                    <p class="mb-24">Start shopping to add items to your wishlist.</p>
                    <a href="{{ route('shop.index') }}" class="btn btn-main py-12 w-50 rounded-8">Start Shopping</a>
                @endif
            </div>
        @else
            <!-- Display the wishlist table if there are items -->
            <div class="wishlist-table border border-gray-100 rounded-8">
                <div class="overflow-x-auto scroll-sm scroll-sm-horizontal" style="box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
                    <table class="table rounded-8 overflow-hidden">
                        <thead>
                            <tr class="border-bottom border-neutral-100">
                                <th class="h6 mb-0 text-md fw-bold px-40 py-32 border-end border-neutral-100">Product Name</th>
                                <th class="h6 mb-0 text-md fw-bold px-40 py-32 border-end border-neutral-100">Unit Price</th>
                                <th class="h6 mb-0 text-md fw-bold px-40 py-32 border-end border-neutral-100">Stock Status</th>
                                <th class="h6 mb-0 text-md fw-bold px-40 py-32 border-end border-neutral-100"></th>
                                <th class="h6 mb-0 text-md fw-bold px-40 py-32"></th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($wishlistItems as $wishlistItem)
                            <tr>
                                <td class="px-20 py-32 border-end border-neutral-100">
                                    <div class="table-product d-flex align-items-center gap-24">
                                        <a href="" class="table-product__thumb border border-gray-100 rounded-8 flex-center">
                                            @if($wishlistItem->product && $wishlistItem->product->images->first())
                                                <img src="{{ asset('storage/' . $wishlistItem->product->images->first()->image_path) }}" alt="{{ $wishlistItem->product->product_name }}">
                                            @else
                                                <img src="{{ asset('path/to/default-image.jpg') }}" alt="Default image">
                                            @endif
                                        </a>

                                        <div class="table-product__content text-start">
                                            <h6 class="title text-md fw-semibold mb-8">
                                                @if($wishlistItem->product)
                                                    <a href="{{ route('showProductDetails', $wishlistItem->product->product_id) }}" class="link text-line-2" tabindex="0">{{ $wishlistItem->product->product_name }}</a>
                                                @else
                                                    <span>Product Not Available</span>
                                                @endif
                                            </h6>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-40 py-32 border-end border-neutral-100">
                                    @if($wishlistItem->product)
                                        <span class="text-md h6 mb-0 fw-semibold">Rs {{ number_format($wishlistItem->product->normal_price, 2) }}</span>
                                    @else
                                        <span class="text-md h6 mb-0 fw-semibold">N/A</span>
                                    @endif
                                </td>
                                <td class="px-40 py-32 border-end border-neutral-100">
                                    @if($wishlistItem->product)
                                        <span class="text-md h6 mb-0 fw-semibold 
                                            {{ $wishlistItem->product->quantity > 0 ? 'text-success' : 'text-danger' }}">
                                            {{ $wishlistItem->product->quantity > 0 ? 'In Stock' : 'Out of Stock' }}
                                        </span>
                                    @else
                                        <span class="text-md h6 mb-0 fw-semibold">N/A</span>
                                    @endif
                                </td>
                                <td class="px-40 py-32 border-end border-neutral-100">
                                    <a href="{{ route('showProductDetails', $wishlistItem->product->product_id ) }}" class="btn btn-main-two rounded-8 px-64">
                                        View Details
                                    </a>
                                </td>
                                <td class="px-40 py-32">
                                    <form action="{{ route('wishlist.destroy', $wishlistItem->product_id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="remove-tr-btn flex-align gap-12 hover-text-danger-600">
                                            <i class="ph ph-trash text-2xl d-flex"></i> <!-- Trash Icon -->
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        @endif
    </div>
</section>


  <!-- ================================ Wishlist Section End ================================ -->

@endsection
