<tr>
    <td >
        @if(isset($payment['name']))
            {{ ucwords($payment['name']) }}
        @else
            <p class="alert alert-danger">You need to have <strong>name</strong> key in your config</p>
        @endif
    </td>
    <td>
        @if(isset($payment['description']))
            {{ $payment['description'] }}
        @endif
    </td>
    <td class="text-left">
        <form action="{{ route('bank-transfer.index') }}">
            <input type="hidden" class="billing_address" name="billing_address" value="">
            <input type="hidden" class="rate" name="rate" value="">
            <input type="hidden" name="shipment_obj_id" value="{{ $shipment_object_id }}">
            <input type="hidden" name="courier_id" value="{{ $courier->id }}">
            <button type="submit" class="btn btn-primary pull-left">{{ ucwords($payment['name']) }} <i class="fa fa-bank"></i></button>
        </form>
    </td>

</tr>
<script type="text/javascript">
    $(document).ready(function () {
        let billingAddressId = $('input[name="billing_address"]:checked').val();
        $('.billing_address').val(billingAddressId);

        $('input[name="billing_address"]').on('change', function () {
          billingAddressId = $('input[name="billing_address"]:checked').val();
          $('.billing_address').val(billingAddressId);
        });

        let courierRadioBtn = $('input[name="rate"]');
        courierRadioBtn.click(function () {
            $('.rate').val($(this).val())
        });
    });
</script>