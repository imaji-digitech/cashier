<div>
    <h5>Omzet Produk</h5>
    <div class="row">
        <div class="col-4">
            <x-simple-card color="bg-primary" title="Bulan ini" value="{{ $revenueThisMonth }}" icon="dollar-sign"/>
        </div>
        <div class="col-4">
            <x-simple-card color="bg-secondary" title="Bulan lalu" value="{{ $revenuePreviousMonth }}" icon="dollar-sign"/>
        </div>
        <div class="col-4">
            <x-simple-card color="bg-success" title="2 Bulan lalu" value="{{ $revenue2PreviousMonth }}" icon="dollar-sign"/>
        </div>
    </div>

    <h5>Produk Terjual</h5>
    <div class="row">
        <div class="col-4">
            <x-simple-card color="bg-primary" title="Bulan ini" value="{{ $amountThisMonth }}" icon="dollar-sign"/>
        </div>
        <div class="col-4">
            <x-simple-card color="bg-secondary" title="Bulan lalu" value="{{ $amountPreviousMonth }}" icon="dollar-sign"/>
        </div>
        <div class="col-4">
            <x-simple-card color="bg-success" title="2 Bulan lalu" value="{{ $amount2PreviousMonth }}" icon="dollar-sign"/>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <x-data-income-outcome
                componentId="some"
                :title="$product->title"
                title1="Produk Terjual"
                value1="{{ $data['amount'] }}"
                title2="Omzet Produk"
                value2="Rp. {{ number_format($data['total']) }}"
                btn1="Potongan karyawan"
                btnColor1="btn-danger"
                btn2="CSV"
                btnColor2="btn-success"
                link1=""
                link2="#"
                :data1="$incomePreviousMonth"
                dataTitle1="Bulan Lalu"
                :data2="$incomeThisMonth"
                dataTitle2="Bulan Ini"
                :data3="$income2PreviousMonth"
                dataTitle3="2 Bulan Lalu"
                :categories="$category"
            />
        </div>
    </div>

</div>