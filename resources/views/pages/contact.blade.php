@extends('layout')
@section('content')

<body>
<script src="{{asset('frontend/js/application-2df3b748c584aae5817f3a89a813d11d.js')}}"></script>

<script type="text/javascript">
    var loggedIn = "false" ;
    var controller = "home";
</script>

<div class="container white-bg padding margin-vertical">
    <div class='center font-bold font-md'>Frequently Asked Questions</div>
    <div class="center tabs col-xs-12">
    <span id="faqGeneralTab" class="col-md-offset-3 col-md-2 col-xs-4 active">
      General
    </span>
        <span id="faqAccountsTab" class="col-md-2 col-xs-4">
      Accounts
    </span>
        <span id="faqOrderingTab" class="col-md-2 col-xs-4">
      Ordering
    </span>
    </div>
    <div class="margin-top-lg">
        <div id="faqGeneralTabDiv" class="padding tab-div">
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <b>What is <span class='brand-color'> medizonebd</span>?</b>
                        </h4>
                    </div>
                    <div class="panel-collapse">
                        <div class="panel-body">
                            medizonebd is a professional service company -
                            with an independent pharmacy and direct links to pharmaceutical suppliers -
                            providing delivery services to the public for medicine and other health care products.
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <b>What services does <span class='brand-color'> medizonebd </span> provide?</b>
                        </h4>
                    </div>
                    <div class="panel-collapse">
                        <div class="panel-body">
                            <ul>
                                <li>We provide a delivery service across Dhaka City for health care products</li>
                                <li>We provide customer support for ordering online, through Facebook, SMS, or email.</li>
                                <li>We provide a service support hotline to ensure customer satisfaction.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <b>Is <span class='brand-color'> medizonebd </span> a licensed pharmacy?</b>
                        </h4>
                    </div>
                    <div class="panel-collapse">
                        <div class="panel-body">
                            Yes. medizonebd has the proper licensing for selling pharmaceutical products.
                            Our physical pharmacy store and office are located in Dhanmondi, Dhaka.
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <b>Is Online sale of Medicines legal in Bangladesh?</b>
                        </h4>
                    </div>
                    <div class="panel-collapse">
                        <div class="panel-body">
                            Yes. Our business model is compliant with the regulatory requirements of
                            the Government of Bangladesh, and we are fully legally allowed to
                            sell and distribute medicine through online services.
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <b>What makes <span class='brand-color'>medizonebd</span> a trusted provider of medicine?</b>
                        </h4>
                    </div>
                    <div class="panel-collapse">
                        <div class="panel-body">
                            <ul>
                                <li>All our medicinal products are directly obtained/collected only from pharmaceutical companies.</li>
                                <li>We have a zero tolerance policy for non-compliant standards in terms of obtaining, storing, and regulating medicine.</li>
                                <li>We only work with trusted suppliers ensuring they are compliant with our quality standards.</li>
                                <li>We have a physical pharmacy store located at a prominent place in Dhanmondi. </li>
                                <li>Medicines are stored in a controlled temperature environment as prescribed or needed.</li>
                                <li>We manage a computerized inventory to monitor expiration date of medicine to ensure the quality and integrity of our products.</li>
                                <li>We manage a customer database (with consent) to keep track of our customers' needs, so that we can provide them with better services e.g. recurring deliveries.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <b>Can I buy all medicines on <span class='brand-color'>medizonebd</span> without a Doctor’s prescription?</b>
                        </h4>
                    </div>
                    <div class="panel-collapse">
                        <div class="panel-body">
                            NO. If any medicine requires a doctor’s prescription, we are not allowed to sell you that medicine.
                            You may upload your prescription online, or work with our customer support staff to handle the needed documents.
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <b>Does <span class='brand-color'>medizonebd</span> ensure the proper environment for storing medicine?</b>
                        </h4>
                    </div>
                    <div class="panel-collapse">
                        <div class="panel-body">
                            Yes. Our pharmacy store has the necessary equipment to store respective medicines properly in temperature controlled environments as necessary.
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <b>Does <span class='brand-color'>medizonebd</span> ensure the proper environment for medicine during the delivery?</b>
                        </h4>
                    </div>
                    <div class="panel-collapse">
                        <div class="panel-body">
                            Yes. Medicines that require cold storage are delivered in our specially designed delivery box to ensure no loss in their usefulness or potency.
                            We also ensure that any medicine that you order will not be in transit for more than 2-4 hours.
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <b>Does <span class='brand-color'>medizonebd</span> ensure the proper environment for medicine during the delivery?</b>
                        </h4>
                    </div>
                    <div class="panel-collapse">
                        <div class="panel-body">
                            Yes. Medicines that require cold storage are delivered in our specially designed delivery box to ensure no loss in their usefulness or potency.
                            We also ensure that any medicine that you order will not be in transit for more than 2-4 hours.
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <b>Does <span class='brand-color'>medizonebd</span> sell medicine internationally?</b>
                        </h4>
                    </div>
                    <div class="panel-collapse">
                        <div class="panel-body">
                            No. Our operations are limited to Bangladesh.
                        </div>
                    </div>
                </div>
                
            </div>

        </div>
        <div id="faqAccountsTabDiv" class="padding tab-div" hidden>
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <b>What are the benefits of registering with <span class='brand-color'>medizonebd</span>?</b>
                        </h4>
                    </div>
                    <div class="panel-collapse">
                        <div class="panel-body">
                            <ul>
                                <li>You can view your previous orders with your account.</li>
                                <li>To repeat an order, you can easily add items to your cart from your previous orders.</li>
                                <li>You may receive updates about membership privileges such as special offers.</li>
                                <li>Your account allows us to better serve you as a customer, with services such as recurring deliveries for any regular medicine you need.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <b>Do I have to have an email address to register?</b>
                        </h4>
                    </div>
                    <div class="panel-collapse">
                        <div class="panel-body">
                            Yes. Currently we require that you have an active email address to register with us. We require a phone number to register as well, and your phone number will be your username when you log in.
                        </div>
                    </div>
                </div>


                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <b>How can I register on <span class='brand-color'>medizonebd</span>?</b>
                        </h4>
                    </div>
                    <div class="panel-collapse">
                        <div class="panel-body">
                            Click <a href='new_user_session_path'> here</a> to register. You may also click the 'Registration/Log In' link on the top right of the web page, or the top right icon (if you are on mobile). You will also be prompted to register when you upload your prescription or checkout your order
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <b>Is there a registration fee for <span class='brand-color'>medizonebd</span>?</b>
                        </h4>
                    </div>
                    <div class="panel-collapse">
                        <div class="panel-body">
                            No, registration is free.
                        </div>
                    </div>
                </div>


                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <b>Is my personal information associated with my <span class='brand-color'> medizonebd</span> account safe?</b>
                        </h4>
                    </div>
                    <div class="panel-collapse">
                        <div class="panel-body">
                            Absolutely. We maintain a strict confidentiality policy, and any information on your account including order history and contact details is secure.
                        </div>
                    </div>
                </div>


                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <b>Can I use <span class='brand-color'> medizonebd</span> without registering?</b>
                        </h4>
                    </div>
                    <div class="panel-collapse">
                        <div class="panel-body">
                            Yes, you may order online or upload a prescription as a guest member, however you will not be able to avail any of the member privileges mentioned above in the first question.
                        </div>
                    </div>
                </div>


                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <b>How can I edit my account information?</b>
                        </h4>
                    </div>
                    <div class="panel-collapse">
                        <div class="panel-body">
                            Click  <a href='/users/edit'>here</a> to edit your account. If you are logged in, the 'Account Details' link on the top right will take you to your details, where you will be able to edit your name, email address, phone number, and also update your password.
                        </div>
                    </div>
                </div>


                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <b>How can I change my password?</b>
                        </h4>
                    </div>
                    <div class="panel-collapse">
                        <div class="panel-body">
                            If you are logged in, the 'Account Details' link on the top right will take you to your details, where you will be able to update your password. <br> If you forgot your password, click <a href='/users/password/new'>here.</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <div id="faqOrderingTabDiv" class="padding tab-div" hidden>
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <b>Is there a delivery fee?</b>
                        </h4>
                    </div>
                    <div class="panel-collapse">
                        <div class="panel-body">
                            Yes, currently we have a delivery charge of 60 Taka. This charge may be waived depending on larger order amounts or promotional offers.
                        </div>
                    </div>
                </div>


                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <b>When can I expect to receive my order?</b>
                        </h4>
                    </div>
                    <div class="panel-collapse">
                        <div class="panel-body">
                            <ul>
                                <li>If you order before 2pm, you will have the option of same day delivery, and opt to receive your order by 9 pm. </li>
                                <li>We have four available time slots for delivery.
                                    <ol>
                                        <li>7 AM to 10 AM</li>
                                        <li>10 AM to 1 PM</li>
                                        <li>3 PM to 6 PM</li>
                                        <li>6 PM to 9 PM</li>
                                    </ol>
                                <li>If you order online, you can choose one of the 4 time slots during checkout. Otherwise, when you place an order with us, we will work with you to find a time within our schedule that works for you.</li>

                            </ul>
                        </div>
                    </div>
                </div>


                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <b>How can I pay for my order?</b>
                        </h4>
                    </div>
                    <div class="panel-collapse">
                        <div class="panel-body">
                            Currently we accept cash on delivery, or bKash.
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <b>Why do I need to receive a confirmation for my order?</b>
                        </h4>
                    </div>
                    <div class="panel-collapse">
                        <div class="panel-body">
                            An order carrying one or more prescription drugs has to be verified and validated by the Registered Pharmacists, stationed in our Head Office. This is an extra level of safeguard we have built in our processes to ensure safety. Only after the Registered Pharmacists in the Head Office approves and confirms the acceptance of your order, the order will be packaged from our Pharmacy to deliver to your doorsteps.
                        </div>
                    </div>
                </div>


                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <b>What happens if I am unreachable and can’t make necessary changes within the specified time limit?</b>
                        </h4>
                    </div>
                    <div class="panel-collapse">
                        <div class="panel-body">
                            Our Tele-callers will attempt to reach out to you twice within a time span of 30 minutes from the time you get an SMS, we will also try to get in touch with your secondary contact and if that is also unsuccessful, then we are sorry to inform that your order will automatically get cancelled.
                        </div>
                    </div>
                </div>



                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <b>If a medical/surgical item or healthcare device has malfunctioned within the allowed liability period, can I get a refund and how?</b>
                        </h4>
                    </div>
                    <div class="panel-collapse">
                        <div class="panel-body">
                            In case of Cash payments, a bank cheque will be couriered to you within 2 working days from the day of our delivery team confirming the pick-up of the items from your place. The cheque will be in the name of the customer placing the order and will be sent/delivered to the billing address entered at the time of order submission.
                        </div>
                    </div>
                </div>




            </div>

        </div>
    </div>
</div>


</body>
</html>

@endsection

