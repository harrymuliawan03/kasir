@extends('layout.app')

@section('contents')
<section class="w-1/4">
        <div class="bg-amber-300 rounded-xl p-4">
            <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl text-center">
                Masukan Pesanan
            </h1>
                @if(session('success'))
                <div class="text-center mx-5 mt-2 rounded-xl bg-green-300">
                    {{ session('success') }}
                </div>
                @endif
            <form class="flex flex-col gap-5 rounded-xl w-full h-full  p-5" action="{{ route('createOrder') }}" method="POST">
                @csrf
                <div class="flex flex-col">
                    <label for="nama_pemesan" class="block font-medium">Nama Pemesan</label>
                    <input type="text" name="nama_pemesan" id="nama_pemesan" class="border bg-white rounded p-3">
                </div>
                <div class="flex flex-col">
                    <label for="nama_menu" class="block font-medium">Nama Menu</label>
                    <input type="text" name="nama_menu" id="nama_menu" class="border bg-white rounded p-3">
                </div>
                <div class="flex flex-col">
                    <label for="jml_porsi" class="block font-medium">Jumlah Porsi</label>
                    <input type="number" name="jml_porsi" id="jml_porsi" class="border bg-white rounded p-3">
                </div>
                <div class="flex flex-col">
                    <label for="total_harga" class="block font-medium">Total Harga</label>
                    <input type="number" name="total_harga" id="total_harga" class="border bg-white rounded p-3">
                </div>
                <div class="flex flex-col">
                    <label for="potongan_harga" class="block font-medium">Potongan Harga</label>
                    <input type="number" name="potongan_harga" id="potongan_harga" class="border bg-white rounded p-3">
                </div>
                <div class="flex flex-col">
                    <label for="grand_total" class="block font-medium">Grandtotal</label>
                    <input type="number" name="grand_total" id="grand_total" class="border bg-white rounded p-3">
                </div>
                <button class="bg-blue-400 p-3 rounded font-bold text-white">Submit</button>
            </form>
        </div>
</section>
@endsection

@section('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        function calculateGrandTotal() {
            // var servings = parseInt($('#jml_porsi').val());
            var totalPrice = parseFloat($('#total_harga').val());
            var discount = parseFloat($('#potongan_harga').val());
            
           if (isNaN(totalPrice) || isNaN(discount) || totalPrice === 0 || discount === 0) {
            // If totalPrice or discount is empty or zero, set grand total to 0
            $('#grand_total').val(0);
            return;
        }
            
            var grandTotal = totalPrice - discount;
            
            $('#grand_total').val(grandTotal);
        }

        $('#jml_porsi, #potongan_harga, #total_harga').keyup(function () {
            calculateGrandTotal();
        });
    });
</script>
@endsection