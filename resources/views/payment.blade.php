<!DOCTYPE html>
<html translate="no" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   <link rel="preload" as="style"
          href="{{asset("assets/checkout/checkout-app-init-4f446c9983667846b5bdd0295927823b.css")}}">
    <meta name="robots" content="noindex">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <meta name="google" content="notranslate">
    <title> {{env("APP_NAME")}}</title>
    <!-- prettier-ignore -->

    <link rel="stylesheet" type="text/css"
          href="{{asset("assets/checkout/checkout-app-init-4f446c9983667846b5bdd0295927823b.css")}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset("assets/checkout/icon-2164909f61112d056505d20036bd32fc.css")}}">
</head>
<body>
<noscript>You need to enable JavaScript to run this app.</noscript>
<div id="root">
    <div class="App-Container is-noBackground flex-container justify-content-center" data-testid="checkout-container">
        <div class="App App--singleItem App--customAmount">
            <div class="App-Overview">
                <header class="Header">
                    @if (session('error'))
                    <div style="color: indianred;">{{session('error')}}</div><br>
                    @endif

                    @if($invoice->status==="paid")
                        <h2>Your invoice has been paid! </h2>
                        @php die; @endphp
                        @endif
                    <div class="Header-content flex-container justify-content-space-between align-items-stretch">
                        <div class="Header-business flex-item width-grow flex-container align-items-center">
                            <div class="Header-merchantLogoWithLabel">
                                <div
                                    class="HeaderImage HeaderImage--icon HeaderImage--iconFallback flex-item width-fixed flex-container justify-content-center align-items-center width-fixed">
                                    <svg class="InlineSVG Icon HeaderImage-fallbackIcon Icon--sm" focusable="false"
                                         viewBox="0 0 16 16">
                                        <path
                                            d="M3 7.5V12h10V7.5c.718 0 1.398-.168 2-.468V15a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V7.032c.602.3 1.282.468 2 .468zM0 3L1.703.445A1 1 0 0 1 2.535 0h10.93a1 1 0 0 1 .832.445L16 3a3 3 0 0 1-5.5 1.659C9.963 5.467 9.043 6 8 6s-1.963-.533-2.5-1.341A3 3 0 0 1 0 3z"
                                            fill-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <span
                                    class="Header-businessLink-label Text Text-color--gray800 Text-fontSize--14 Text-fontWeight--500">Back</span>
                                <h1 class="Header-businessLink-name Text Text-color--gray800 Text-fontSize--14 Text-fontWeight--500 Text--truncate">
                                    {{env("APP_NAME")}}</h1></div>
                        </div>
                        <div class="Header-actions flex-item width-fixed">
                            <button class="Button Header-viewDetailsButton Button--link Button--sm" type="button">
                                <div class="flex-container justify-content-flex-end align-items-center">
                                    <svg class="InlineSVG Icon Button-Icon Button-Icon--right Icon--sm Icon--square"
                                         focusable="false" viewBox="0 0 12 12">
                                        <path
                                            d="M10.193 3.97a.75.75 0 0 1 1.062 1.062L6.53 9.756a.75.75 0 0 1-1.06 0L.745 5.032A.75.75 0 0 1 1.807 3.97L6 8.163l4.193-4.193z"
                                            fill-rule="evenodd"></path>
                                    </svg>
                                    <div class="Header-detailsLabel"
                                         style="position: unset; opacity: 1; transform: none;"><span
                                            class="Text Text-color--default Text-fontSize--13 Text-fontWeight--400 Text--truncate">Details</span>
                                    </div>
                                </div>
                            </button>
                        </div>
                    </div>
                </header>
                <div class="OrderSummaryColumn" data-testid="order-summary-column">
                    <div data-testid="product-summary" class="ProductSummary no-image">
                        <div class="ProductSummary-info"><span
                                class="ProductSummary-name Text Text-color--gray500 Text-fontSize--16 Text-fontWeight--500"
                                data-testid="product-summary-name"><div
                                    class="ExpandableText ExpandableText--noMarginRight"><div data-testid=""
                                                                                              class="ExpandableText--truncated"
                                                                                              style="-webkit-line-clamp: 2;">Digital Marketing</div>
                                                                                        @if($invoice->total_milestone>=0)
                                                                                              <div data-testid="" class="ExpandableText--truncated"
                                                                                              style="-webkit-line-clamp: 2;">
                                                                                               <b> Milestone Payment </b>:  {{$invoice->total_milestone>=0?$invoice->completed_milestone+1:""}}
                                                                                                  </div>
                                                                                                  @endif
                                                                                                 </div></span>
                            <div class="ProductSummary-amountsContainer">
                                <div class="ProductSummary-totalsRead" style="opacity: 0;">
                                    <div class="ProductSummary-totalAmountContainer" style="opacity: 1;"><span
                                            class="ProductSummary-totalAmount Text Text-color--default Text-fontWeight--600 Text--tabularNumbers"
                                            id="ProductSummary-totalAmount"
                                            data-testid="product-summary-total-amount"><span></span></span></div>
                                    <span
                                        class="ProductSummary-description Text Text-color--gray500 Text-fontSize--14 Text-fontWeight--500"
                                        id="ProductSummary-description" data-testid="product-summary-description"><div
                                            class="ProductSummaryDescription ProductSummaryDescription--singleItem"><div
                                                class="ExpandableText ExpandableText--noMarginRight"><div data-testid=""
                                                                                                          class="ExpandableText--truncated ">Thank You.</div></div></div></span>
                                </div>
                                <form class="ProductSummary-totalsWrite"  style="opacity: 1; pointer-events: all;"
                                     >

                                    <input type="hidden" name="invoiceId" value="{{$invoice->id}}">
                                    <div class="FormFieldGroup" data-qa="FormFieldGroup-customUnitAmount">
                                        <div
                                            class="FormFieldGroup-labelContainer flex-container justify-content-space-between">
                                            <label for="customUnitAmount"><span
                                                    class="Text Text-color--gray600 Text-fontSize--13 Text-fontWeight--500"></span></label>
                                        </div>
                                        <div class="FormFieldGroup-Fieldset" id="customUnitAmount-fieldset">
                                            <div class="FormFieldGroup-container">
                                                <div
                                                    class="FormFieldGroup-child FormFieldGroup-child--width-12 FormFieldGroup-childLeft FormFieldGroup-childRight FormFieldGroup-childTop FormFieldGroup-childBottom">
                                                    <div class="FormFieldInput">
                                                        <div class="CheckoutInputContainer"><span class="InputContainer"
                                                                                                  data-max=""><input
                                                                    class="CheckoutInput ProductSummary-changeAmountInput Input"
                                                                    autocomplete="fake" autocorrect="off"
                                                                    spellcheck="false"
                                                                    readonly
                                                                    id="customUnitAmount" name="customUnitAmount"
                                                                    type="text" inputmode="decimal" placeholder="$0.00"
                                                                    aria-invalid="false" aria-describedby=""
                                                                    data-1p-ignore="false"
                                                                    value="${{$invoice->installment_amount===null?$invoice->order_amount:$invoice->installment_amount}}"></span>
                                                            <input type="hidden" name="amount"
                                                                   value="{{$invoice->installment_amount===null?$invoice->order_amount:$invoice->installment_amount}}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="FieldError-container" style="opacity: 0; height: 0px;"><span
                                                        class="FieldError Text Text-color--red Text-fontSize--13"><span
                                                            aria-hidden="true"></span></span></div>
                                            </div>
                                            <div class="FieldError-container" style="opacity: 0; height: 0px;"><span
                                                    class="FieldError Text Text-color--red Text-fontSize--13"><span
                                                        aria-hidden="true"></span></span></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="ProductSummary-buttonsContainer ProductSummary-buttonsContainerHidden"
                                 data-testid="product-summary-buttons">
                                <div class="ProductSummary-changeAmountButtonContainer"
                                     style="opacity: 1; height: 100%; pointer-events: all;">
                                    <button type="button"
                                            class="ProductSummaryButton ProductSummary-changeAmountButton ProductSummary-changeAmountButtonHidden ProductSummaryButton-labelBlack ProductSummaryButton-grayBackground"
                                            disabled=""><span class="Text Text-color--default Text-fontWeight--500">Change amount</span>
                                    </button>
                                </div>
                            </div>
                            <span
                                class="ProductSummary-description Text Text-color--gray500 Text-fontSize--14 Text-fontWeight--500"
                                id="ProductSummary-description" data-testid="product-summary-description"><div
                                    class="ProductSummaryDescription ProductSummaryDescription--singleItem"><div
                                        class="ExpandableText ExpandableText--noMarginRight"></div></div></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="App-Payment is-noBackground">
                <div class="CheckoutPaymentForm">
                    <div class="PaymentRequestOrHeader" style="display: inherit; height: auto;">
                        <div class="PaymentHeaderContainer" style="display: block; opacity: 1;"><h2
                                class="PaymentHeader Text Text-color--gray600 Text-fontSize--16 Text-fontWeight--500">
                                Contact information</h2></div>
                        <div class="ButtonAndDividerContainer" style="opacity: 0; height: 0px; display: none;">
                            <div class="ButtonContainer">
                                <div>
                                    <div class="ButtonWrapper"></div>
                                </div>
                            </div>
                            <div></div>
                            <div>
                                <div class="Divider">
                                    <hr>
                                    <p class="Divider-Text Text Text-color--gray400 Text-fontSize--14 Text-fontWeight--400">
                                        <span class="DividerText">Or pay another way</span></p></div>
                            </div>
                        </div>
                    </div>
                    <div class="PaymentFormFixedHeightContainer flex-container direction-column" style="height: 662px;">
                        <form  id="transactionForm" method="post"
                               action="{{route("transaction")}}" novalidate="">
                            @csrf
                            <input type="hidden" name="amount"
                                   value="{{$invoice->installment_amount===null?$invoice->order_amount:$invoice->installment_amount}}">
                            <input type="hidden" name="invoiceId" value="{{$invoice->id}}">
                            <div style="height: 572.766px;">
                                <div>
                                    <div style="opacity: 1;">
                                        <div
                                            class="App-Global-Fields flex-container spacing-16 direction-row wrap-wrap">
                                            <div class="flex-item width-12">
                                                <div class="FormFieldGroup" data-qa="FormFieldGroup-email">
                                                    <div
                                                        class="FormFieldGroup-labelContainer flex-container justify-content-space-between">
                                                        <label for="email"><span
                                                                class="Text Text-color--gray600 Text-fontSize--13 Text-fontWeight--500">Email</span></label>
                                                        <div style="opacity: 1; transform: none;"></div>
                                                    </div>
                                                    <div class="FormFieldGroup-Fieldset" id="email-fieldset">
                                                        <div class="FormFieldGroup-container">
                                                            <div
                                                                class="FormFieldGroup-child FormFieldGroup-child--width-12 FormFieldGroup-childLeft FormFieldGroup-childRight FormFieldGroup-childTop FormFieldGroup-childBottom">
                                                                <div class="FormFieldInput">
                                                                    <div class="CheckoutInputContainer"><span
                                                                            class="InputContainer" data-max=""><input
                                                                                class="CheckoutInput Input Input--empty"
                                                                                autocomplete="email" autocorrect="off"
                                                                                spellcheck="false" autocapitalize="none"
                                                                                id="email" name="email" type="text"
                                                                                inputmode="email" aria-invalid="false"
                                                                                aria-describedby=""
                                                                                readonly
                                                                                data-1p-ignore="false"
                                                                                value="{{$invoice->email}}"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="FieldError-container"
                                                                 style="opacity: 0; height: 0px;"><span
                                                                    class="FieldError Text Text-color--red Text-fontSize--13"><span
                                                                        aria-hidden="true"></span></span></div>
                                                        </div>
                                                        <div class="FieldError-container"
                                                             style="opacity: 0; height: 0px;"><span
                                                                class="FieldError Text Text-color--red Text-fontSize--13"><span
                                                                    aria-hidden="true"></span></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-item width-12"><h2
                                                    class="PaymentMethod-Heading Text Text-color--gray600 Text-fontSize--16 Text-fontWeight--500">
                                                    Payment method</h2></div>
                                        </div>
                                        <div style="opacity: 1; height: auto;">
                                            <div class="Tabs is-icontabs is-desktop">
                                                <div class="Tabs-Container">
                                                    <div role="tablist" aria-orientation="horizontal"
                                                         aria-label="Payment methods" class="Tabs-TabList">
                                                        <div role="presentation"
                                                             class="Tabs-TabListItemContainer Tabs-TabListItemContainer--is-selected">
                                                            <button
                                                                class="Tabs-TabListItem Tabs-TabListItem--is-selected"
                                                                id="card-tab" data-testid="card-tab-button"
                                                                role="tab" type="button"
                                                                aria-controls="card-tab-panel"
                                                                aria-label="Pay with card" aria-selected="true"
                                                                tabindex="0" title="Card">
                                                                <div class="Tabs-TabListItemContent">
                                                                    <div class="Tabs-TabListPaymentMethod">
                                                                        <div class="Tabs-TabListPaymentIcon"><img
                                                                                src="{{asset("assets/checkout/card-ce24697297bd3c6a00fdd2fb6f760f0d.svg")}}"
                                                                                alt="" class="Icon Icon--md"></div>
                                                                        <div class="Tabs-TabListPaymentLabel"
                                                                             data-text="Card">Card
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </button>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="Tabs-TabPanelContainer">
                                                    <div style="opacity: 1; width: 100%; transform: none;">
                                                        <div id="card-tab-panel" role="tabpanel"
                                                             aria-labelledby="card-tab">
                                                            <div>
                                                                <div
                                                                    class="PaymentForm-paymentMethodForm flex-container spacing-16 direction-column wrap-wrap">
                                                                    <div class="flex-item width-12">
                                                                        <div class="FormFieldGroup">
                                                                            <div
                                                                                class="FormFieldGroup-labelContainer flex-container justify-content-space-between">
                                                                                <label for="cardNumber-fieldset"><span
                                                                                        class="Text Text-color--gray600 Text-fontSize--13 Text-fontWeight--500">Card information</span></label>
                                                                            </div>
                                                                            <fieldset class="FormFieldGroup-Fieldset"
                                                                                      id="cardNumber-fieldset">
                                                                                <div class="FormFieldGroup-container"
                                                                                     id="cardNumber-fieldset-inner">

                                                                                    <div
                                                                                        class="FormFieldGroup-child FormFieldGroup-child--width-12 FormFieldGroup-childLeft FormFieldGroup-childRight FormFieldGroup-childTop">
                                                                                        <div
                                                                                            class="FormFieldInput padding-right-120">
                                                                                            <div
                                                                                                class="CheckoutInputContainer">
                                                                                                <span
                                                                                                    class="InputContainer"
                                                                                                    data-max=""><input
                                                                                                        class="CheckoutInput CheckoutInput--tabularnums Input Input--empty"
                                                                                                        autocomplete="cc-number"
                                                                                                        autocorrect="off"
                                                                                                        spellcheck="false"
                                                                                                        id="cardNumber"
                                                                                                        name="cardNumber"
                                                                                                        type="text"
                                                                                                        inputmode="numeric"
                                                                                                        aria-label="Card number"
                                                                                                        placeholder="1234 1234 1234 1234"
                                                                                                        aria-invalid="false"
                                                                                                        data-1p-ignore="false"
                                                                                                        value=""></span>
                                                                                            </div>
                                                                                            <div
                                                                                                class="FormFieldInput-Icons"
                                                                                                style="opacity: 1;">
                                                                                                <div
                                                                                                    style="transform: none;">
                                                                                                    <span
                                                                                                        class="FormFieldInput-IconsIcon is-visible"><img
                                                                                                            src="{{asset("/assets/checkout/visa-729c05c240c4bdb47b03ac81d9945bfe.svg")}}"
                                                                                                            alt="Visa"
                                                                                                            class="BrandIcon"
                                                                                                            loading="lazy"
                                                                                                            fetchpriority="low"></span>
                                                                                                </div>
                                                                                                <div
                                                                                                    style="transform: none;">
                                                                                                    <span
                                                                                                        class="FormFieldInput-IconsIcon is-visible"><img
                                                                                                            src="{{asset("/assets/checkout/mastercard-4d8844094130711885b5e41b28c9848f.svg")}}"
                                                                                                            alt="MasterCard"
                                                                                                            class="BrandIcon"
                                                                                                            loading="lazy"
                                                                                                            fetchpriority="low"></span>
                                                                                                </div>
                                                                                                <div
                                                                                                    style="transform: none;">
                                                                                                    <span
                                                                                                        class="FormFieldInput-IconsIcon is-visible"><img
                                                                                                            src="{{asset("/assets/checkout/amex-a49b82f46c5cd6a96a6e418a6ca1717c.svg")}}"
                                                                                                            alt="American Express"
                                                                                                            class="BrandIcon"
                                                                                                            loading="lazy"
                                                                                                            fetchpriority="low"></span>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="CardFormFieldGroupIconOverflow">
                                                                                                    <span
                                                                                                        class="CardFormFieldGroupIconOverflow-Item CardFormFieldGroupIconOverflow-Item--invisible"
                                                                                                        role="presentation"><span
                                                                                                            class="FormFieldInput-IconsIcon"
                                                                                                            role="presentation"><img
                                                                                                                src="{{asset("/assets/checkout/unionpay-8a10aefc7295216c338ba4e1224627a1.svg")}}"
                                                                                                                alt="UnionPay"
                                                                                                                class="BrandIcon"
                                                                                                                loading="lazy"
                                                                                                                fetchpriority="low"></span></span><span
                                                                                                        class="CardFormFieldGroupIconOverflow-Item CardFormFieldGroupIconOverflow-Item--invisible"
                                                                                                        role="presentation"><span
                                                                                                            class="FormFieldInput-IconsIcon"
                                                                                                            role="presentation"><img
                                                                                                                src="{{asset("/assets/checkout/jcb-271fd06e6e7a2c52692ffa91a95fb64f.svg")}}"
                                                                                                                alt="JCB"
                                                                                                                class="BrandIcon"
                                                                                                                loading="lazy"
                                                                                                                fetchpriority="low"></span></span><span
                                                                                                        class="CardFormFieldGroupIconOverflow-Item CardFormFieldGroupIconOverflow-Item--invisible"
                                                                                                        role="presentation"><span
                                                                                                            class="FormFieldInput-IconsIcon"
                                                                                                            role="presentation"><img
                                                                                                                src="{{asset("/assets/checkout/discover-ac52cd46f89fa40a29a0bfb954e33173.svg")}}"
                                                                                                                alt="Discover"
                                                                                                                class="BrandIcon"
                                                                                                                loading="lazy"
                                                                                                                fetchpriority="low"></span></span><span
                                                                                                        class="CardFormFieldGroupIconOverflow-Item CardFormFieldGroupIconOverflow-Item--visible"
                                                                                                        role="presentation"><span
                                                                                                            class="FormFieldInput-IconsIcon"
                                                                                                            role="presentation"><img
                                                                                                                src="{{asset("/assets/checkout/diners-fbcbd3360f8e3f629cdaa80e93abdb8b.svg")}}"
                                                                                                                alt="Diners Club"
                                                                                                                class="BrandIcon"
                                                                                                                loading="lazy"
                                                                                                                fetchpriority="low"></span></span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="FormFieldGroup-child FormFieldGroup-child--width-6 FormFieldGroup-childLeft FormFieldGroup-childBottom">
                                                                                        <div class="FormFieldInput">
                                                                                            <div
                                                                                                class="CheckoutInputContainer">
                                                                                                <span
                                                                                                    class="InputContainer"
                                                                                                    data-max=""><input
                                                                                                        class="CheckoutInput CheckoutInput--tabularnums Input Input--empty"
                                                                                                        autocomplete="cc-exp"
                                                                                                        autocorrect="off"
                                                                                                        spellcheck="false"
                                                                                                        id="cardExpiry"
                                                                                                        name="cardExpiry"
                                                                                                        type="text"
                                                                                                        inputmode="numeric"
                                                                                                        aria-label="Expiration"
                                                                                                        placeholder="MM / YY"
                                                                                                        aria-invalid="false"
                                                                                                        data-1p-ignore="false"
                                                                                                        value=""></span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="FormFieldGroup-child FormFieldGroup-child--width-6 FormFieldGroup-childRight FormFieldGroup-childBottom">
                                                                                        <div
                                                                                            class="FormFieldInput has-icon padding-right-32">
                                                                                            <div
                                                                                                class="CheckoutInputContainer">
                                                                                                <span
                                                                                                    class="InputContainer"
                                                                                                    data-max=""><input
                                                                                                        class="CheckoutInput CheckoutInput--tabularnums Input Input--empty"
                                                                                                        autocomplete="cc-csc"
                                                                                                        autocorrect="off"
                                                                                                        spellcheck="false"
                                                                                                        id="cardCvc"
                                                                                                        name="cardCvc"
                                                                                                        type="text"
                                                                                                        inputmode="numeric"
                                                                                                        aria-label="CVC"
                                                                                                        placeholder="CVC"
                                                                                                        aria-invalid="false"
                                                                                                        data-1p-ignore="false"
                                                                                                        value=""></span>
                                                                                            </div>
                                                                                            <div
                                                                                                class="FormFieldInput-Icon is-loaded"
                                                                                                data-testid="FormFieldInput-Icon">
                                                                                                <div>
                                                                                                    <svg
                                                                                                        class="Icon Icon--md"
                                                                                                        focusable="false"
                                                                                                        viewBox="0 0 32 21"
                                                                                                        role="img"
                                                                                                        aria-label="CVC">
                                                                                                        <title>
                                                                                                            CVC</title>
                                                                                                        <g fill="none"
                                                                                                           fill-rule="evenodd">
                                                                                                            <g class="Icon-fill">
                                                                                                                <g transform="translate(0 2)">
                                                                                                                    <path
                                                                                                                        d="M21.68 0H2c-.92 0-2 1.06-2 2v15c0 .94 1.08 2 2 2h25c.92 0 2-1.06 2-2V9.47a5.98 5.98 0 0 1-3 1.45V11c0 .66-.36 1-1 1H3c-.64 0-1-.34-1-1v-1c0-.66.36-1 1-1h17.53a5.98 5.98 0 0 1 1.15-9z"
                                                                                                                        opacity=".2"></path>
                                                                                                                    <path
                                                                                                                        d="M19.34 3H0v3h19.08a6.04 6.04 0 0 1 .26-3z"
                                                                                                                        opacity=".3"></path>
                                                                                                                    <!---->
                                                                                                                </g>
                                                                                                                <g transform="translate(18)">
                                                                                                                    <path
                                                                                                                        d="M7 14A7 7 0 1 1 7 0a7 7 0 0 1 0 14zM4.22 4.1h-.79l-1.93.98v1l1.53-.8V9.9h1.2V4.1zm2.3.8c.57 0 .97.32.97.78 0 .5-.47.85-1.15.85h-.3v.85h.36c.72 0 1.21.36 1.21.88 0 .5-.48.84-1.16.84-.5 0-1-.16-1.52-.47v1c.56.24 1.12.37 1.67.37 1.31 0 2.21-.67 2.21-1.64 0-.68-.42-1.23-1.12-1.45.6-.2.99-.73.99-1.33C8.68 4.64 7.85 4 6.65 4a4 4 0 0 0-1.57.34v.98c.48-.27.97-.42 1.44-.42zm4.32 2.18c.73 0 1.24.43 1.24.99 0 .59-.51 1-1.24 1-.44 0-.9-.14-1.37-.43v1.03c.49.22.99.33 1.48.33.26 0 .5-.04.73-.1.52-.85.82-1.83.82-2.88l-.02-.42a2.3 2.3 0 0 0-1.23-.32c-.18 0-.37.01-.57.04v-1.3h1.44a5.62 5.62 0 0 0-.46-.92H9.64v3.15c.4-.1.8-.17 1.2-.17z"></path>
                                                                                                                </g>
                                                                                                            </g>
                                                                                                        </g>
                                                                                                    </svg>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        style="opacity: 0; height: 0px;">
                                                                                        <span
                                                                                            class="FieldError Text Text-color--red Text-fontSize--13"><span
                                                                                                aria-hidden="true"></span></span>
                                                                                    </div>
                                                                                </div>
                                                                            </fieldset>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="InstallmentPlanOptionsForm InstallmentPlanOptionsForm-hidden flex-item width-12">
                                                                        <div
                                                                            style="display: none; height: 0px; opacity: 0; pointer-events: none;">
                                                                            <div class="CheckboxField">
                                                                                <div class="Checkbox">
                                                                                    <div
                                                                                        class="Checkbox-InputContainer">
                                                                                        <input
                                                                                            id="InstallmentPlanSelector-checkbox"
                                                                                            name="InstallmentPlanSelector-checkbox"
                                                                                            type="checkbox"
                                                                                            class="Checkbox-Input"><span
                                                                                            class="Checkbox-StyledInput"><svg
                                                                                                class="InlineSVG Icon Checkbox-tickSvg"
                                                                                                focusable="false"
                                                                                                width="21"
                                                                                                height="19"
                                                                                                viewBox="0 0 21 19"
                                                                                                fill="none"><path
                                                                                                    fill-rule="evenodd"
                                                                                                    clip-rule="evenodd"
                                                                                                    d="M19.2242 3.76495L8.52368 17.1606L2.25391 10.6793L4.41013 8.59346L8.30846 12.6233L16.8802 1.89258L19.2242 3.76495Z"
                                                                                                    fill="#1A1A1A"
                                                                                                    fill-opacity="0.9"></path><path
                                                                                                    d="M19.6149 4.07702L19.9269 3.68636L19.5363 3.37429L17.1923 1.50192L16.8016 1.18985L16.4896 1.58052L8.27259 11.8671L4.7695 8.24582L4.42186 7.88645L4.06249 8.23409L1.90627 10.3199L1.5469 10.6676L1.89454 11.0269L8.16431 17.5083L8.55955 17.9169L8.91434 17.4727L19.6149 4.07702Z"
                                                                                                    stroke="white"
                                                                                                    stroke-opacity="0.5"
                                                                                                    stroke-linecap="square"></path></svg></span>
                                                                                    </div>
                                                                                    <label
                                                                                        for="InstallmentPlanSelector-checkbox"><span
                                                                                            class="Checkbox-Label Text Text-color--gray600 Text-fontSize--13 Text-fontWeight--500"><div
                                                                                                class="Text Text-color--default Text-fontSize--13">Pay in installments</div></span></label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="BillingInfoForm-addressInput flex-item width-12"
                                                                        aria-hidden="false">
                                                                        <div
                                                                            style="pointer-events: auto; display: block; height: auto; opacity: 1;">
                                                                            <div
                                                                                class="flex-container spacing-16 direction-column wrap-wrap">
                                                                                <div class="flex-item width-12">
                                                                                    <div class="FormFieldGroup">
                                                                                        <div
                                                                                            class="FormFieldGroup-labelContainer flex-container justify-content-space-between">
                                                                                            <label
                                                                                                for="billingName"><span
                                                                                                    class="Text Text-color--gray600 Text-fontSize--13 Text-fontWeight--500">Cardholder name</span></label>
                                                                                        </div>
                                                                                        <div
                                                                                            class="FormFieldGroup-Fieldset"
                                                                                            id="billingName-fieldset">
                                                                                            <div
                                                                                                class="FormFieldGroup-container"
                                                                                                id="billingName-fieldset-inner">
                                                                                                <div
                                                                                                    class="FormFieldGroup-child FormFieldGroup-child--width-12 FormFieldGroup-childLeft FormFieldGroup-childRight FormFieldGroup-childTop FormFieldGroup-childBottom">
                                                                                                    <div
                                                                                                        class="FormFieldInput">
                                                                                                        <div
                                                                                                            class="CheckoutInputContainer">
                                                                                                            <span
                                                                                                                class="InputContainer"
                                                                                                                data-max=""><input
                                                                                                                    class="CheckoutInput Input Input--empty"
                                                                                                                    autocomplete="cc-name"
                                                                                                                    autocorrect="off"
                                                                                                                    spellcheck="false"
                                                                                                                    id="billingName"
                                                                                                                    name="billingName"
                                                                                                                    type="text"
                                                                                                                    placeholder="Full name on card"
                                                                                                                    aria-invalid="false"
                                                                                                                    data-1p-ignore="false"
                                                                                                                    value=""></span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    style="opacity: 0; height: 0px;">
                                                                                                    <span
                                                                                                        class="FieldError Text Text-color--red Text-fontSize--13"><span
                                                                                                            aria-hidden="true"></span></span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="flex-item width-12">
                                                                                    <div class="FormFieldGroup">
                                                                                        <div
                                                                                            class="FormFieldGroup-labelContainer flex-container justify-content-space-between">
                                                                                            <label for="country"><span
                                                                                                    class="Text Text-color--gray600 Text-fontSize--13 Text-fontWeight--500">Country or region</span></label>
                                                                                        </div>
                                                                                        <div
                                                                                            class="FormFieldGroup-Fieldset"
                                                                                            id="country-fieldset">
                                                                                            <div
                                                                                                class="FormFieldGroup-container FormFieldGroup-container--supportTransitions"
                                                                                                id="country-fieldset-inner">
                                                                                                <div
                                                                                                    class="FormFieldGroup-child FormFieldGroup-child--width-12 FormFieldGroup-childLeft FormFieldGroup-childRight FormFieldGroup-childTop FormFieldGroup-childBottom">
                                                                                                    <div
                                                                                                        class="FormFieldInput is-select">
                                                                                                        <div>
                                                                                                            <div
                                                                                                                class="Select">
                                                                                                                <select
                                                                                                                    id="billingCountry"
                                                                                                                    name="billingCountry"
                                                                                                                    autocomplete="billing country"
                                                                                                                    aria-label="Country or region"
                                                                                                                    class="Select-source">
                                                                                                                    <option
                                                                                                                        value=""
                                                                                                                        disabled=""
                                                                                                                        hidden=""></option>
                                                                                                                    <option
                                                                                                                        value="AF">
                                                                                                                        Afghanistan
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="AX">
                                                                                                                        Åland
                                                                                                                        Islands
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="AL">
                                                                                                                        Albania
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="DZ">
                                                                                                                        Algeria
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="AD">
                                                                                                                        Andorra
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="AO">
                                                                                                                        Angola
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="AI">
                                                                                                                        Anguilla
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="AQ">
                                                                                                                        Antarctica
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="AG">
                                                                                                                        Antigua
                                                                                                                        &amp;
                                                                                                                        Barbuda
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="AR">
                                                                                                                        Argentina
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="AM">
                                                                                                                        Armenia
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="AW">
                                                                                                                        Aruba
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="AC">
                                                                                                                        Ascension
                                                                                                                        Island
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="AU">
                                                                                                                        Australia
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="AT">
                                                                                                                        Austria
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="AZ">
                                                                                                                        Azerbaijan
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="BS">
                                                                                                                        Bahamas
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="BH">
                                                                                                                        Bahrain
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="BD">
                                                                                                                        Bangladesh
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="BB">
                                                                                                                        Barbados
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="BY">
                                                                                                                        Belarus
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="BE">
                                                                                                                        Belgium
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="BZ">
                                                                                                                        Belize
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="BJ">
                                                                                                                        Benin
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="BM">
                                                                                                                        Bermuda
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="BT">
                                                                                                                        Bhutan
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="BO">
                                                                                                                        Bolivia
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="BA">
                                                                                                                        Bosnia
                                                                                                                        &amp;
                                                                                                                        Herzegovina
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="BW">
                                                                                                                        Botswana
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="BV">
                                                                                                                        Bouvet
                                                                                                                        Island
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="BR">
                                                                                                                        Brazil
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="IO">
                                                                                                                        British
                                                                                                                        Indian
                                                                                                                        Ocean
                                                                                                                        Territory
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="VG">
                                                                                                                        British
                                                                                                                        Virgin
                                                                                                                        Islands
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="BN">
                                                                                                                        Brunei
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="BG">
                                                                                                                        Bulgaria
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="BF">
                                                                                                                        Burkina
                                                                                                                        Faso
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="BI">
                                                                                                                        Burundi
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="KH">
                                                                                                                        Cambodia
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="CM">
                                                                                                                        Cameroon
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="CA">
                                                                                                                        Canada
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="CV">
                                                                                                                        Cape
                                                                                                                        Verde
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="BQ">
                                                                                                                        Caribbean
                                                                                                                        Netherlands
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="KY">
                                                                                                                        Cayman
                                                                                                                        Islands
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="CF">
                                                                                                                        Central
                                                                                                                        African
                                                                                                                        Republic
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="TD">
                                                                                                                        Chad
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="CL">
                                                                                                                        Chile
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="CN">
                                                                                                                        China
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="CO">
                                                                                                                        Colombia
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="KM">
                                                                                                                        Comoros
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="CG">
                                                                                                                        Congo
                                                                                                                        -
                                                                                                                        Brazzaville
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="CD">
                                                                                                                        Congo
                                                                                                                        -
                                                                                                                        Kinshasa
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="CK">
                                                                                                                        Cook
                                                                                                                        Islands
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="CR">
                                                                                                                        Costa
                                                                                                                        Rica
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="CI">
                                                                                                                        Côte
                                                                                                                        d’Ivoire
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="HR">
                                                                                                                        Croatia
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="CW">
                                                                                                                        Curaçao
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="CY">
                                                                                                                        Cyprus
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="CZ">
                                                                                                                        Czechia
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="DK">
                                                                                                                        Denmark
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="DJ">
                                                                                                                        Djibouti
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="DM">
                                                                                                                        Dominica
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="DO">
                                                                                                                        Dominican
                                                                                                                        Republic
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="EC">
                                                                                                                        Ecuador
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="EG">
                                                                                                                        Egypt
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="SV">
                                                                                                                        El
                                                                                                                        Salvador
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="GQ">
                                                                                                                        Equatorial
                                                                                                                        Guinea
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="ER">
                                                                                                                        Eritrea
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="EE">
                                                                                                                        Estonia
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="SZ">
                                                                                                                        Eswatini
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="ET">
                                                                                                                        Ethiopia
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="FK">
                                                                                                                        Falkland
                                                                                                                        Islands
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="FO">
                                                                                                                        Faroe
                                                                                                                        Islands
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="FJ">
                                                                                                                        Fiji
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="FI">
                                                                                                                        Finland
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="FR">
                                                                                                                        France
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="GF">
                                                                                                                        French
                                                                                                                        Guiana
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="PF">
                                                                                                                        French
                                                                                                                        Polynesia
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="TF">
                                                                                                                        French
                                                                                                                        Southern
                                                                                                                        Territories
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="GA">
                                                                                                                        Gabon
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="GM">
                                                                                                                        Gambia
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="GE">
                                                                                                                        Georgia
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="DE">
                                                                                                                        Germany
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="GH">
                                                                                                                        Ghana
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="GI">
                                                                                                                        Gibraltar
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="GR">
                                                                                                                        Greece
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="GL">
                                                                                                                        Greenland
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="GD">
                                                                                                                        Grenada
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="GP">
                                                                                                                        Guadeloupe
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="GU">
                                                                                                                        Guam
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="GT">
                                                                                                                        Guatemala
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="GG">
                                                                                                                        Guernsey
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="GN">
                                                                                                                        Guinea
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="GW">
                                                                                                                        Guinea-Bissau
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="GY">
                                                                                                                        Guyana
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="HT">
                                                                                                                        Haiti
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="HN">
                                                                                                                        Honduras
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="HK">
                                                                                                                        Hong
                                                                                                                        Kong
                                                                                                                        SAR
                                                                                                                        China
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="HU">
                                                                                                                        Hungary
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="IS">
                                                                                                                        Iceland
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="IN">
                                                                                                                        India
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="ID">
                                                                                                                        Indonesia
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="IQ">
                                                                                                                        Iraq
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="IE">
                                                                                                                        Ireland
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="IM">
                                                                                                                        Isle
                                                                                                                        of
                                                                                                                        Man
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="IL">
                                                                                                                        Israel
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="IT">
                                                                                                                        Italy
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="JM">
                                                                                                                        Jamaica
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="JP">
                                                                                                                        Japan
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="JE">
                                                                                                                        Jersey
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="JO">
                                                                                                                        Jordan
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="KZ">
                                                                                                                        Kazakhstan
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="KE">
                                                                                                                        Kenya
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="KI">
                                                                                                                        Kiribati
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="XK">
                                                                                                                        Kosovo
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="KW">
                                                                                                                        Kuwait
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="KG">
                                                                                                                        Kyrgyzstan
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="LA">
                                                                                                                        Laos
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="LV">
                                                                                                                        Latvia
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="LB">
                                                                                                                        Lebanon
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="LS">
                                                                                                                        Lesotho
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="LR">
                                                                                                                        Liberia
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="LY">
                                                                                                                        Libya
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="LI">
                                                                                                                        Liechtenstein
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="LT">
                                                                                                                        Lithuania
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="LU">
                                                                                                                        Luxembourg
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="MO">
                                                                                                                        Macao
                                                                                                                        SAR
                                                                                                                        China
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="MG">
                                                                                                                        Madagascar
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="MW">
                                                                                                                        Malawi
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="MY">
                                                                                                                        Malaysia
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="MV">
                                                                                                                        Maldives
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="ML">
                                                                                                                        Mali
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="MT">
                                                                                                                        Malta
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="MQ">
                                                                                                                        Martinique
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="MR">
                                                                                                                        Mauritania
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="MU">
                                                                                                                        Mauritius
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="YT">
                                                                                                                        Mayotte
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="MX">
                                                                                                                        Mexico
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="MD">
                                                                                                                        Moldova
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="MC">
                                                                                                                        Monaco
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="MN">
                                                                                                                        Mongolia
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="ME">
                                                                                                                        Montenegro
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="MS">
                                                                                                                        Montserrat
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="MA">
                                                                                                                        Morocco
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="MZ">
                                                                                                                        Mozambique
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="MM">
                                                                                                                        Myanmar
                                                                                                                        (Burma)
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="NA">
                                                                                                                        Namibia
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="NR">
                                                                                                                        Nauru
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="NP">
                                                                                                                        Nepal
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="NL">
                                                                                                                        Netherlands
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="NC">
                                                                                                                        New
                                                                                                                        Caledonia
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="NZ">
                                                                                                                        New
                                                                                                                        Zealand
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="NI">
                                                                                                                        Nicaragua
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="NE">
                                                                                                                        Niger
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="NG">
                                                                                                                        Nigeria
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="NU">
                                                                                                                        Niue
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="MK">
                                                                                                                        North
                                                                                                                        Macedonia
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="NO">
                                                                                                                        Norway
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="OM">
                                                                                                                        Oman
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="PK">
                                                                                                                        Pakistan
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="PS">
                                                                                                                        Palestinian
                                                                                                                        Territories
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="PA">
                                                                                                                        Panama
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="PG">
                                                                                                                        Papua
                                                                                                                        New
                                                                                                                        Guinea
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="PY">
                                                                                                                        Paraguay
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="PE">
                                                                                                                        Peru
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="PH">
                                                                                                                        Philippines
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="PN">
                                                                                                                        Pitcairn
                                                                                                                        Islands
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="PL">
                                                                                                                        Poland
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="PT">
                                                                                                                        Portugal
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="PR">
                                                                                                                        Puerto
                                                                                                                        Rico
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="QA">
                                                                                                                        Qatar
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="RE">
                                                                                                                        Réunion
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="RO">
                                                                                                                        Romania
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="RU">
                                                                                                                        Russia
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="RW">
                                                                                                                        Rwanda
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="WS">
                                                                                                                        Samoa
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="SM">
                                                                                                                        San
                                                                                                                        Marino
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="ST">
                                                                                                                        São
                                                                                                                        Tomé
                                                                                                                        &amp;
                                                                                                                        Príncipe
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="SA">
                                                                                                                        Saudi
                                                                                                                        Arabia
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="SN">
                                                                                                                        Senegal
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="RS">
                                                                                                                        Serbia
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="SC">
                                                                                                                        Seychelles
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="SL">
                                                                                                                        Sierra
                                                                                                                        Leone
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="SG">
                                                                                                                        Singapore
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="SX">
                                                                                                                        Sint
                                                                                                                        Maarten
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="SK">
                                                                                                                        Slovakia
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="SI">
                                                                                                                        Slovenia
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="SB">
                                                                                                                        Solomon
                                                                                                                        Islands
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="SO">
                                                                                                                        Somalia
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="ZA">
                                                                                                                        South
                                                                                                                        Africa
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="GS">
                                                                                                                        South
                                                                                                                        Georgia
                                                                                                                        &amp;
                                                                                                                        South
                                                                                                                        Sandwich
                                                                                                                        Islands
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="KR">
                                                                                                                        South
                                                                                                                        Korea
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="SS">
                                                                                                                        South
                                                                                                                        Sudan
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="ES">
                                                                                                                        Spain
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="LK">
                                                                                                                        Sri
                                                                                                                        Lanka
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="BL">
                                                                                                                        St.
                                                                                                                        Barthélemy
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="SH">
                                                                                                                        St.
                                                                                                                        Helena
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="KN">
                                                                                                                        St.
                                                                                                                        Kitts
                                                                                                                        &amp;
                                                                                                                        Nevis
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="LC">
                                                                                                                        St.
                                                                                                                        Lucia
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="MF">
                                                                                                                        St.
                                                                                                                        Martin
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="PM">
                                                                                                                        St.
                                                                                                                        Pierre
                                                                                                                        &amp;
                                                                                                                        Miquelon
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="VC">
                                                                                                                        St.
                                                                                                                        Vincent
                                                                                                                        &amp;
                                                                                                                        Grenadines
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="SR">
                                                                                                                        Suriname
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="SJ">
                                                                                                                        Svalbard
                                                                                                                        &amp;
                                                                                                                        Jan
                                                                                                                        Mayen
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="SE">
                                                                                                                        Sweden
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="CH">
                                                                                                                        Switzerland
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="TW">
                                                                                                                        Taiwan
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="TJ">
                                                                                                                        Tajikistan
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="TZ">
                                                                                                                        Tanzania
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="TH">
                                                                                                                        Thailand
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="TL">
                                                                                                                        Timor-Leste
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="TG">
                                                                                                                        Togo
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="TK">
                                                                                                                        Tokelau
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="TO">
                                                                                                                        Tonga
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="TT">
                                                                                                                        Trinidad
                                                                                                                        &amp;
                                                                                                                        Tobago
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="TA">
                                                                                                                        Tristan
                                                                                                                        da
                                                                                                                        Cunha
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="TN">
                                                                                                                        Tunisia
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="TR">
                                                                                                                        Turkey
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="TM">
                                                                                                                        Turkmenistan
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="TC">
                                                                                                                        Turks
                                                                                                                        &amp;
                                                                                                                        Caicos
                                                                                                                        Islands
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="TV">
                                                                                                                        Tuvalu
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="UG">
                                                                                                                        Uganda
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="UA">
                                                                                                                        Ukraine
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="AE">
                                                                                                                        United
                                                                                                                        Arab
                                                                                                                        Emirates
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="GB">
                                                                                                                        United
                                                                                                                        Kingdom
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="US">
                                                                                                                        United
                                                                                                                        States
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="UY">
                                                                                                                        Uruguay
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="UZ">
                                                                                                                        Uzbekistan
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="VU">
                                                                                                                        Vanuatu
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="VA">
                                                                                                                        Vatican
                                                                                                                        City
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="VE">
                                                                                                                        Venezuela
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="VN">
                                                                                                                        Vietnam
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="WF">
                                                                                                                        Wallis
                                                                                                                        &amp;
                                                                                                                        Futuna
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="EH">
                                                                                                                        Western
                                                                                                                        Sahara
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="YE">
                                                                                                                        Yemen
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="ZM">
                                                                                                                        Zambia
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="ZW">
                                                                                                                        Zimbabwe
                                                                                                                    </option>
                                                                                                                </select>
                                                                                                                <svg
                                                                                                                    class="InlineSVG Icon Select-arrow Icon--sm"
                                                                                                                    focusable="false"
                                                                                                                    viewBox="0 0 12 12">
                                                                                                                    <path
                                                                                                                        d="M10.193 3.97a.75.75 0 0 1 1.062 1.062L6.53 9.756a.75.75 0 0 1-1.06 0L.745 5.032A.75.75 0 0 1 1.807 3.97L6 8.163l4.193-4.193z"
                                                                                                                        fill-rule="evenodd"></path>
                                                                                                                </svg>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    style="opacity: 0; height: 0px;">
                                                                                                    <span
                                                                                                        class="FieldError Text Text-color--red Text-fontSize--13"><span
                                                                                                            aria-hidden="true"></span></span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="SignUpForm-signUpFormContainer flex-item width-12">
                                                                        <div
                                                                            style="pointer-events: auto; display: block; height: auto; opacity: 1;">
                                                                            <div>
                                                                                <div
                                                                                    class="SignUpForm SignUpForm--withTerms">
                                                                                    <div
                                                                                        class="SignUpForm-headerContainer">
                                                                                        <div
                                                                                            class="FormFieldCheckbox SignUpForm-checkbox">
                                                                                            <div class="CheckboxField">
                                                                                                <div class="Checkbox">
                                                                                                    <div
                                                                                                        class="Checkbox-InputContainer">
                                                                                                        <input
                                                                                                            id="enableStripePass"
                                                                                                            name="enableStripePass"
                                                                                                            type="checkbox"
                                                                                                            class="Checkbox-Input"><span
                                                                                                            class="Checkbox-StyledInput"><svg
                                                                                                                class="InlineSVG Icon Checkbox-tickSvg"
                                                                                                                focusable="false"
                                                                                                                width="21"
                                                                                                                height="19"
                                                                                                                viewBox="0 0 21 19"
                                                                                                                fill="none"><path
                                                                                                                    fill-rule="evenodd"
                                                                                                                    clip-rule="evenodd"
                                                                                                                    d="M19.2242 3.76495L8.52368 17.1606L2.25391 10.6793L4.41013 8.59346L8.30846 12.6233L16.8802 1.89258L19.2242 3.76495Z"
                                                                                                                    fill="#1A1A1A"
                                                                                                                    fill-opacity="0.9"></path><path
                                                                                                                    d="M19.6149 4.07702L19.9269 3.68636L19.5363 3.37429L17.1923 1.50192L16.8016 1.18985L16.4896 1.58052L8.27259 11.8671L4.7695 8.24582L4.42186 7.88645L4.06249 8.23409L1.90627 10.3199L1.5469 10.6676L1.89454 11.0269L8.16431 17.5083L8.55955 17.9169L8.91434 17.4727L19.6149 4.07702Z"
                                                                                                                    stroke="white"
                                                                                                                    stroke-opacity="0.5"
                                                                                                                    stroke-linecap="square"></path></svg></span>
                                                                                                    </div>
                                                                                                    <label
                                                                                                        for="enableStripePass"><span
                                                                                                            class="Checkbox-Label Text Text-color--gray600 Text-fontSize--13 Text-fontWeight--500"><div
                                                                                                                class="SignUpForm-labelHeader"
                                                                                                                style="opacity: 1;">Save my information</div><div
                                                                                                                class="SignUpForm-subLabel"
                                                                                                                id="link-registration-subheader-message">Saved my information for future secured process. </div></span></label>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="SignUpForm-phoneInputAnimation"
                                                                                        style="display: none; height: 0px; opacity: 0; pointer-events: none;">
                                                                                        <div
                                                                                            class="SignUpForm-errorMessageAnimation"
                                                                                            style="display: none; height: 0px; opacity: 0; pointer-events: none;">
                                                                                            <span
                                                                                                class="FieldError Text Text-color--red Text-fontSize--13"><span
                                                                                                    aria-hidden="false"
                                                                                                    role="alert">Required</span></span>
                                                                                        </div>
                                                                                        <div class="SignUpForm-footer">
                                                                                            <div
                                                                                                class="SignUpForm-footerLogo">
                                                                                                <svg
                                                                                                    class="InlineSVG Icon Icon--sm"
                                                                                                    focusable="false"
                                                                                                    viewBox="0 0 36 16">
                                                                                                    <path
                                                                                                        d="M2.5674.1484H0v15.5721h2.5674V.1485ZM31.6652 10.0833c1.1164-1.6 2.1954-3.479 3.1442-5.4697h-2.8652c-1.1162 2.1767-2.3626 4.1302-3.6278 5.6186-.3163.3907-.6512.7441-.9675 1.0604V.1484h-2.5673v13.0047c-.428.1674-.8374.2604-1.2094.2604-.6697 0-1.0046-.5209-1.0046-1.5813v-1.228c.0185-2.8837.0372-4.9674-2.214-5.9162-.5582-.2419-1.4511-.4093-2.586.0558-1.786.7442-3.535 2.9023-5.0047 5.3767v-5.507h-2.5861v11.107h2.6791c1.7489-4.2418 4.2419-7.8697 5.8977-8.5767.3721-.1488.5209-.093.5953-.0558.5768.2418.6699.7442.6512 3.5162v1.2466c0 2.0651 1.0977 4.1487 3.5721 4.1487 2.0838 0 4.2419-1.265 6.4186-3.7394l2.0652 3.3116h3.0325l-3.4233-5.4884ZM5.1163 15.7213h2.5674V4.6143H5.1163v11.107ZM6.4 2.8651c.7912 0 1.4325-.6414 1.4325-1.4325C7.8325.6414 7.1912 0 6.4 0c-.7912 0-1.4326.6414-1.4326 1.4326 0 .7911.6414 1.4325 1.4326 1.4325Z"></path>
                                                                                                </svg>
                                                                                            </div>
                                                                                            <span
                                                                                                class="SignUpForm-footerSpacer">•</span>
                                                                                            <button
                                                                                                class="Button SignUpForm-moreInfoLink SignUpForm-moreInfoLink--secondary Button--link Button--sm"
                                                                                                type="button"
                                                                                                disabled="">
                                                                                                <div
                                                                                                    class="flex-container justify-content-center align-items-center">
                                                                                                    <a class="Link Link--checkout--secondary"
                                                                                                       target="_self">More
                                                                                                        info</a></div>
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="PaymentForm-confirmPaymentContainer mt4 flex-item width-grow">
                                <div>
                                    <div class="flex-item width-12"></div>
                                    <div class="flex-item width-12">
                                        <button class="SubmitButton SubmitButton--incomplete" id="payButton"
                                                type="button"
                                                data-testid="hosted-payment-submit-button"
                                                style="background-color: rgb(0, 116, 212); color: rgb(255, 255, 255);">
                                            <div class="SubmitButton-Shimmer"
                                                 style="background: linear-gradient(to right, rgba(0, 116, 212, 0) 0%, rgb(58, 139, 238) 50%, rgba(0, 116, 212, 0) 100%);"></div>
                                            <div class="SubmitButton-TextContainer"><span
                                                    class="SubmitButton-Text SubmitButton-Text--current Text Text-color--default Text-fontWeight--500 Text--truncate"
                                                    aria-hidden="false" type="button">Pay</span><span
                                                    class="SubmitButton-Text SubmitButton-Text--pre Text Text-color--default Text-fontWeight--500 Text--truncate"
                                                    aria-hidden="true">Processing...</span></div>
                                            <div class="SubmitButton-IconContainer">
                                                <div class="SubmitButton-Icon SubmitButton-Icon--pre">
                                                    <div>
                                                        <div class="Icon Icon--md Icon--square">
                                                            <svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"
                                                                 focusable="false">
                                                                <path
                                                                    d="M3 7V5a5 5 0 1 1 10 0v2h.5a1 1 0 0 1 1 1v6a2 2 0 0 1-2 2h-9a2 2 0 0 1-2-2V8a1 1 0 0 1 1-1zm5 2.5a1 1 0 0 0-1 1v2a1 1 0 0 0 2 0v-2a1 1 0 0 0-1-1zM11 7V5a3 3 0 1 0-6 0v2z"
                                                                    fill="#ffffff" fill-rule="evenodd"></path>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="SubmitButton-Icon SubmitButton-SpinnerIcon SubmitButton-Icon--pre">
                                                    <div>
                                                        <div class="Icon Icon--md Icon--square">
                                                            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                                                 focusable="false">
                                                                <ellipse cx="12" cy="12" rx="10" ry="10"
                                                                         style="stroke: rgb(255, 255, 255);"></ellipse>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="SubmitButton-CheckmarkIcon">
                                                <div>
                                                    <div class="Icon Icon--md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="14"
                                                             focusable="false">
                                                            <path d="M 0.5 6 L 8 13.5 L 21.5 0" fill="transparent"
                                                                  stroke-width="2" stroke="#ffffff"
                                                                  stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </button>
                                    </div>
                                    <div class="flex-item width-12">
                                        <div class="ConfirmPayment-PostSubmit"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script>
    //stripe
    $(document).ready(function () {
        $("#payButton").click(function (e) {
            e.preventDefault()
            $("#transactionForm").submit()
        })
    })
    //card
    $(document).ready(function () {
        $('#cardNumber').on('input', function () {
            let value = $(this).val();

            // Remove non-digit characters
            value = value.replace(/\D/g, '');

            // Format the value with spaces for readability
            if (value.length > 4) {
                value = value.match(/.{1,4}/g).join(' ');
            }

            // Set the formatted value back to the input
            $(this).val(value);

            // Optionally, check if the value is valid
            if (!isValidCardNumber(value.replace(/\s/g, ''))) {
                $(this).addClass('invalid');
            } else {
                $(this).removeClass('invalid');
            }
        });

        function isValidCardNumber(cardNumber) {
            // Remove spaces and validate length
            cardNumber = cardNumber.replace(/\s/g, '');

            // Basic length validation (13 to 19 digits)
            if (cardNumber.length < 13 || cardNumber.length > 19) {
                return false;
            }

            // Luhn algorithm for basic validation
            return luhnCheck(cardNumber);
        }

        function luhnCheck(value) {
            let sum = 0;
            let shouldDouble = false;

            // Start from the end of the string
            for (let i = value.length - 1; i >= 0; i--) {
                let digit = parseInt(value.charAt(i), 10);

                if (shouldDouble) {
                    digit *= 2;
                    if (digit > 9) digit -= 9;
                }

                sum += digit;
                shouldDouble = !shouldDouble;
            }

            // Check if sum is a multiple of 10
            return (sum % 10 === 0);
        }

        $("#cardExpiry").on('input', function () {
            let value = $(this).val();

            // Remove non-digit characters
            value = value.replace(/\D/g, '');

            // Format the value as MM/YY
            if (value.length > 2) {
                value = value.slice(0, 2) + '/' + value.slice(2, 4);
            }

            // Set the formatted value back to the input
            $(this).val(value);

            // Optionally, check if the value is valid
            if (value.length === 5 && !isValidDate(value)) {
                $(this).addClass('invalid');
            } else {
                $(this).removeClass('invalid');
            }
        });

        function isValidDate(dateStr) {
            // Simple validation for the MM/YY format
            let [month, year] = dateStr.split('/').map(Number);

            // Check month range
            if (month < 1 || month > 12) {
                return false;
            }

            // Check year range
            if (year < 0 || year > 99) {
                return false;
            }

            return true;
        }

        $('#cardCvc').on('input', function () {
            let value = $(this).val();

            // Remove non-digit characters
            value = value.replace(/\D/g, '');

            // Limit the length to 4 digits (common for CVV)
            if (value.length > 4) {
                value = value.slice(0, 4);
            }

            // Set the formatted value back to the input
            $(this).val(value);

            // Optionally, check if the value is valid
            if (!isValidCvv(value)) {
                $(this).addClass('invalid');
            } else {
                $(this).removeClass('invalid');
            }
        });

        function isValidCvv(cvv) {
            // CVV should be 3 or 4 digits
            return cvv.length === 3 || cvv.length === 4;
        }
    });
</script>

</body>
</html>
