<!-- donations form -->
<div class="donations pb-4 pr-0 pr-md-4">
    <div class="row mb-2">
        <div class="col-12 payment-triggers">
            <button type="button" class="btn payment-trigger active mr-1" id="monthly-trigger" title="Monthly">Monthly</button>
            <button type="button" class="btn payment-trigger ml-1" id="single-trigger" title="Single">Single</button>
        </div>
    </div>

    <!-- Payment form -->
    <div class="row">
        <div class="col-12">
            <div class="payment-panel">
                <div class="row">
                    <h2 class="col-12 frequency mb-4">Support us with a <span id="freqRegular" class="active">regular</span><span id="freqSingle">single</span> donation</h2>

                    <div class="col-md-5 d-none d-md-block">
<div class="image-wrapper" style="background-image: url('https://www.livability.org.uk/newliv/wp-content/plugins/fpm-donations/assets/images/donations-image.jpg')"></div>
                    </div>

                    <div class="col-12 col-md-7">
                        <div class="row">
                            <div class="col-12 mb-4 button-wrapper" id="monthly-donation-amounts">
                                <button class="btn btn-amt initial-select" data-amt="5">&pound;5</button>
                                <button class="btn btn-amt ml-2" data-amt="25">&pound;25</button>
                                <button class="btn btn-amt ml-2" data-amt="50">&pound;50</button>
                                <button class="btn btn-amt ml-2" data-amt="100">&pound;100</button>
                            </div>
                            
                            <div class="col-12 mb-4 button-wrapper" id="single-donation-amounts" style="display: none;">
                                <button class="btn btn-amt" data-amt="10">&pound;10</button>
                                <button class="btn btn-amt ml-2" data-amt="25">&pound;25</button>
                                <button class="btn btn-amt ml-2" data-amt="50">&pound;50</button>
                                <button class="btn btn-amt ml-2" data-amt="100">&pound;100</button>
                            </div>
                            
                            <div class="col-12 mb-2 could-pay">
								<p id="couldPay5" class="initial-select"><strong>&pound;5</strong> could enable more people to receive round-the-clock specialist care</p>
								<p id="couldPay25"><strong>&pound;25</strong> could support more activities both in our Livability homes and beyond for people to live their lives to the full</p>
								<p id="couldPay50"><strong>&pound;50</strong> could help support communication and other technology, enabling people with complex disabilities to connect with their loved ones</p>
								<p id="couldPay100"><strong>&pound;100</strong> could help support specialist physiotherapy and other equipment to support people's physical and mental wellbeing</p>
								<p id="couldPayGeneric">Your donation will help us to support people with disabilities in our special education School and College, Adult Social Care and Rehabilitation Services.</p>
							</div>

                            <div class="col-12">
                                <form id="paymentForm" action="" method="POST">
                                    <div class="form-group">
                                        <div class="input-wrapper">
                                            <span class="currency-symbol">&pound;</span>
                                            <input type="number" class="form-control form-control-lg mb-2" id="amount" placeholder="Other amount" />
                                        </div>
                                        <p id="value-error" class="alert error alert-danger mb-2" role="alert">Please add a donation value</p>
                                        <p id="min-val" class="alert error alert-danger mb-2" role="alert">Minimum donation value must be at least &pound;2</p>
                                        <button type="button" id="submitButton" class="btn">Donate</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
