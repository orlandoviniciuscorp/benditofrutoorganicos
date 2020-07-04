<div class="modal fade" id="santander" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <hr />
            <p><strong>Banco: Santander</strong></p>
            <p>Código do Banco: <strong>033</strong></p>
            <p>Tipo de Conta: <strong>Conta Corrente</strong></p>
            <p>Beneficiário: <strong>Fabiana Fróes Cordeiro</strong></p>
            <p>Agência: <strong>3838</strong></p>
            <p>Número da Conta: <strong> 01-096603-7</strong></p>
            <p>CPF: <strong>102.825.617-57</strong></p>
            @isset($total)
                @if(session()->get('coupon') != null)
                    <p>Valor: <strong> {{ number_format($total-session()->get('coupon')->percentage *$total/100, 2, '.', ',')}}</strong></p>
                @endif
                <p>Valor: <strong> {{ config('cart.currency_symbol') }} {{ $total }}</strong></p>
            @endisset
            <p><strong><small class="text-danger text">* {{ config('bank-transfer.note') }}</small></strong></p>
            <p><strong><small class="text-danger text">*Enviar o comprovante de depósito para o <br />
                        número: (21) 99451-6260 - Fabiana</small></strong></p>
            <div class="modal-footer text-left">
                @isset($courier)
                    <form action="{{ route('checkout.store') }}" method="post">
                        {{ csrf_field() }}

                        <input type="hidden" name="courier_id" value="{{$courier->id}}" />
                        <input type="hidden" name="billingAddress_id" value="{{$billingAddress->id}}" />
                        <input type="hidden" name="payment_method" value="Transferência Bancária"/>
                        <button type="submit" onclick="return confirm('Tem Certeza?')" class="btn btn-danger pull-left">Confirmar Compra</button>
                    </form>
                @endisset
                <button type="button" class="btn btn-secondary pull-left" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="nubank" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <hr />
            <h3>Banco: Nubank</h3>
            <hr>
            <p>Código do Banco: <strong>260</strong></p>
            <p>Tipo de Conta: <strong>Conta Corrente</strong></p>
            <p>Beneficiário: <strong>Fabiana Fróes Cordeiro</strong></p>
            <p>Agência: <strong>0001</strong></p>
            <p>Número da Conta: <strong> 81522727-0</strong></p>
            <p>CPF: <strong>102.825.617-57</strong></p>
            @isset($total)
                @if(session()->get('coupon') != null)
                    <p>Valor: <strong> {{ number_format($total-session()->get('coupon')->percentage *$total/100, 2, '.', ',')}}</strong></p>
                @endif
                <p>Valor: <strong> {{ config('cart.currency_symbol') }} {{ $total }}</strong></p>
            @endisset
            <p><strong><small class="text-danger text">* {{ config('bank-transfer.note') }}</small></strong></p>
            <p><strong><small class="text-danger text">*Enviar o comprovante de depósito para o <br />
                        número: (21) 99451-6260 - Fabiana</small></strong></p>
            <div class="modal-footer text-left">
                @isset($courier)
                    <form action="{{ route('checkout.store') }}" method="post">
                        {{ csrf_field() }}

                        <input type="hidden" name="courier_id" value="{{$courier->id}}" />
                        <input type="hidden" name="billingAddress_id" value="{{$billingAddress->id}}" />
                        <input type="hidden" name="payment_method" value="Transferência Bancária"/>
                        <button type="submit" onclick="return confirm('Tem Certeza?')" class="btn btn-danger pull-left">Confirmar Compra</button>
                    </form>
                @endisset
                <button type="button" class="btn btn-secondary pull-left" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="bradesco" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <hr />
            <h3>Banco: Bradesco</h3>
            <hr>
            <p>Código do Banco: <strong>237</strong></p>
            <p>Tipo de Conta: <strong>Conta Poupança</strong></p>
            <p>Beneficiário: <strong>Jéssica da Silva Carvalhos</strong></p>
            <p>Agência: <strong>6756</strong></p>
            <p>Número da Conta: <strong> 1000209-5</strong></p>
            <p>CPF: <strong>142.682.587-01</strong></p>
            @isset($total)
                <p>Valor: <strong> {{ config('cart.currency_symbol') }} {{ $total }}</strong></p>
            @endisset
            <p><strong><small class="text-danger text">* {{ config('bank-transfer.note') }}</small></strong></p>
            <p><strong><small class="text-danger text">*Enviar o comprovante de depósito para o  número: (21)98887-5830 - Sarita Marques</small></strong></p>
            <div class="modal-footer text-left">
                @isset($courier)
                    <form action="{{ route('checkout.store') }}" method="post">
                        {{ csrf_field() }}

                        <input type="hidden" name="courier_id" value="{{$courier->id}}" />
                        <input type="hidden" name="billingAddress_id" value="{{$billingAddress->id}}" />
                        <input type="hidden" name="payment_method" value="Transferência Bancária"/>
                        <button type="submit" onclick="return confirm('Tem Certeza?')" class="btn btn-danger pull-left">Confirmar Compra</button>
                    </form>
                @endisset
                <button type="button" class="btn btn-secondary pull-left" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="itau" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <hr />
            <h3>Banco: Itaú</h3>
            <hr>
            <p>Código do Banco: <strong>341</strong></p>
            <p>Tipo de Conta: <strong>Conta Corrente</strong></p>
            <p>Beneficiário: <strong>Jenifer Soares Medeiros</strong></p>
            <p>Agência: <strong>0807</strong></p>
            <p>Número da Conta: <strong> 75197-9</strong></p>
            <p>CPF: <strong>150.557.347-52</strong></p>
            @isset($total)
                <p>Valor: <strong> {{ config('cart.currency_symbol') }} {{ $total }}</strong></p>
            @endisset
            <p><strong><small class="text-danger text">* {{ config('bank-transfer.note') }}</small></strong></p>
            <p><strong><small class="text-danger text">*Enviar o comprovante de depósito para o  número: (21)98887-5830 - Sarita Marques</small></strong></p>
            <div class="modal-footer text-left">
                @isset($courier)
                    <form action="{{ route('checkout.store') }}" method="post">
                        {{ csrf_field() }}

                        <input type="hidden" name="courier_id" value="{{$courier->id}}" />
                        <input type="hidden" name="billingAddress_id" value="{{$billingAddress->id}}" />
                        <input type="hidden" name="payment_method" value="Transferência Bancária"/>
                        <button type="submit" onclick="return confirm('Tem Certeza?')" class="btn btn-danger pull-left">Confirmar Compra</button>
                    </form>
                @endisset
                <button type="button" class="btn btn-secondary pull-left" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>