<?php 
// require_once 'config.php';
// $db = new Database();
?>

<!-- header iclude -->
<?php include 'includes/header.php' ?>

        <!-- main-content -->
        <div class="container py-5 my-5">

        <?php 
            // Get values from input fields
            if(isset($_POST['submit'])) {
                if(!empty($_POST['account']) && !empty($_POST['amount']) && !empty($_POST['company'])) {
                    $account = $_POST['account']; //Dodati f-ju za izbegavanje specijalnih karaktera
                    $amount = $_POST['amount'];
                    $company = $_POST['company'];
                
                    $db->db_newPayment($account, $amount, $company);
                } else {
                    echo "<div class='alert alert-danger'>
                            <strong>Fields can not be empty!</strong>
                        </div>";
                }
            }

        ?>
          
           <div class="row mb-5">
              <div class="col-12 d-flex align-middle">
                <img src="images/logo.png" width="50" height="50" alt="bank logo">
                <h1 class="d-inline pl-3">Terms and Conditions for World Union Bank</h1>
              </div>
           </div>

          

           <div class="row">
             <div class="col-12 mb-4">
               <h4>Introduction</h4>
                <p>These Terms will be applied fully and affect to your use of this Website. By using this Website, you agreed to accept all terms and conditions written in here. You must not use this Website if you disagree with any of these Website Standard Terms and Conditions.</p>
              </div>
              <div class="col-12">
                <h4>Intellectual Property Rights</h4>
                <p>Other than the content you own, under these Terms, World Union Bank and/or its licensors own all the intellectual property rights and materials contained in this Website.</p>
              </div>



              <div class="col-12">

                <ol>

                  <li class="mb-3">
                      <span class="font-weight-bold">OUR SERVICE STANDARD</span> <br> We will use reasonable care and skill when providing you with the Account and / or Service.
                  </li>

                  <li class="mb-3">
                    <span class="font-weight-bold">ELECTRONIC ACCESS TO YOUR ACCOUNT AND / OR SERVICE</span><br>
                      <ol type="a">
                          <li class="mb-1"> <small>This is our electronic communication system which we use to offer a range of transactional, data transmission and reporting functionalities
                              across key Services, including cash (payments and collections), trade (documentary trade and on an open account basis) and foreign
                              exchange. Straight2Bank Services may be supplied through a range of Channels, including our website, the internet or such other electronic
                              link designated by us from time to time.</small>
                          </li>
                          <li>
                              <small>While we endeavour to minimise any service outages, Straight2Bank Services may be unavailable from time to time. You are responsible for
                              having adequate contingency plans to transact by other means if there is any interruption to, delay in, or suspension or withdrawal of
                              Straight2Bank Services.</small>
                          </li>
                      </ol>
                  </li>

                  <li class="mb-3">
                  <span class="font-weight-bold">COMMUNICATIONS, INSTRUCTIONS AND INFORMATION</span><br>
                      <ol type="a">
                          <li class="mb-1"> <small>We will communicate with you, using your details in our records. We may communicate with you any Account statement, confirmation,
                            correspondence, notice or other communication.</small>
                          </li>
                          <li>
                              <small>Any communications from us to you will be treated as effectively communicated (unless otherwise stated).</small>
                          </li>
                          <li>
                            <small>Any notice, Instruction, correspondence or other communication you give us will only be effective when we actually receive it.</small>
                          </li>
                      </ol>
                  </li>

                  <li class="mb-3">
                  <span class="font-weight-bold">AUTHORITY OF YOUR AUTHORISED PERSONS</span><br>
                      <ol type="a">
                          <li class="mb-1"> <small>An Authorised Person will be deemed to have the authority to give Instructions, sign any document and / or perform any act on your behalf, including: agreeing to, supplementing, restating or varying the terms of the Agreement; adding, opening, removing, closing, amending or managing any Account or Service; appointing any person, representative or agent to act on your behalf or accepting an appointment as an agent for any person.</small>
                          </li>
                          <li>
                              <small>You confirm the following in relation to your Authorised Persons:Authorised Persons: you are responsible for and will ensure that your Authorised Persons are given the appropriate authorisation as
                              required by you and that such Authorised Persons act within this authority to use and / or act on your behalf in relation to an Account or a
                              Service; Comply with requirements: your Authorised Persons understand and comply with all requirements set out in the Agreement (including
                              complying with any security procedures, recommendations or guides we may provide to them); Change of Authorised Persons: you must notify us in writing immediately if there are changes to your Authorised Persons. Any
                              changes to your Authorised Persons will not be effective until we have updated our records with the change. We may continue to act on
                              the authority of your existing Authorised Persons until our records are updated with the change. If we cannot process the change to your
                              Authorised Persons, we will notify you as soon as we can; and
                              Liability for Authorised Persons: you acknowledge that you remain liable for all acts and transactions of your Authorised Persons.
                              </small>
                          </li>
                      </ol>
                  </li>

                  <li class="mb-3">
                  <span class="font-weight-bold">THIRD PARTY SERVICE PROVIDERS</span><br>
                      <ol type="a">
                          <li class="mb-1"> 
                            <small>We may engage third party service providers (including payment, clearing or settlement systems, clearing houses, payment intermediaries,
                            financial institutions or other members of the Standard Chartered Group, mobile wallet providers and couriers, whether as independent
                            contractors, sub-contractors or agents) in connection with an Account or in providing you with a Service. Our provision of any Account or
                            Service will be dependent on and subject to the performance of such persons.
                            </small>
                          </li>
                          <li>
                              <small>We will not be liable for the performance or any act or omission of any such service provider or any of their employees or agents, including any
                              fraud, misconduct, negligence or insolvency on the part of any of them.
                              </small>
                          </li>
                          <li>
                            <small>
                            You are liable to us and will indemnify us on demand against any Loss arising from or incurred by us engaging any third party service provider
                            in connection with an Account or in providing you with a Service. 
                            </small>
                          </li>
                      </ol>
                  </li>

                  <li class="mb-3">
                  <span class="font-weight-bold">GENERAL COMPLIANCE</span><br>
                      <ol type="a">
                          <li class="mb-1"> 
                            <small>As part of your use of an Account or Service, you must comply with all applicable laws.
                            </small>
                          </li>
                          <li>
                              <small>Nothing in the Agreement obliges us to do or omit to do anything if it would or might in our reasonable opinion constitute a breach of any
                              applicable law. If we are served or issued with any court order or any directives issued under law by any Authority, we will act in accordance
                              with them and you must not commence proceedings against us in relation to our actions.
                              </small>
                          </li>
                          <li>
                            <small>
                            If you are an intermediary acting for a third party, you represent to us that you have: satisfactorily performed all “know-your-customer” and other anti-money laundering activities in accordance with any applicable law and
                            your policies (including verification of the third party’s identity and source of funds and nature of such third party’s transactions); and
                            appropriate processes to detect and report any suspicious activity involving the third party.
                            </small>
                          </li>
                      </ol>
                  </li>

                  <li class="mb-3">
                  <span class="font-weight-bold">SPECIFIC ACCOUNT TERMS</span><br>
                      <ol type="a">
                          <li class="mb-1"> 
                            <small>We may specify limits on how much you need to have in your Account, the types of currencies that we may accept, as well as our usual
                            charges, commission and interest rates and any other requirements.
                            </small>
                          </li>
                          <li>
                              <small>You must provide us with your mandate authorising your Authorised Persons to operate your Account. We will tell you if we cannot accept any
                              Authorised Person due to our policies or any applicable law.
                              You may provide a new mandate (or equivalent) at any time. We may continue to rely on your existing mandate until we have updated our
                              records. If we cannot process your new mandate, we will notify you as soon as we can.
                              </small>
                          </li>
                          <li>
                            <small>
                            We will credit money paid into your Account in a currency we accept and in an amount equivalent to the cash deposit. We may charge you for
                            certain methods of payments at rates which we will inform to you. The date the money is received as payment into your Account will depend on
                            current market practice or as per our normal banking practice.
                            If payment into your Account is made by any method other than a cash deposit, (for example, cheques) or through a domestic or international
                            transfer of funds, we do not have to credit your Account before we actually receive the funds. If we credit your Account before receiving the
                            funds, this is on the condition that we subsequently receive the funds. We will deduct the money from your Account if we do not subsequently
                            receive the funds. You represent and warrant that you have full legal title to such deposit and accept full responsibility for the authenticity,
                            validity and correctness of signatures, endorsements and particulars appearing on the relevant Payment Instrument.
                            If a deposit slip contains errors or omissions, we may amend the deposit slip. Our amended version is conclusive for all purposes.
                            Any amount standing to the credit of an Account is only repayable at the Service Location where such Account is maintained.
                            </small>
                          </li>
                          <li>
                            <small>
                            We may accept an Instruction to transfer funds between your Account and any other account of yours or any other person (assuming we have
                            the necessary arrangements in place).
                            You are responsible for giving us the correct information (including details of the account you want to transfer funds to). If your payment
                            Instructions identify the payee both by name and by an identifying / account number, we or any Standard Chartered Group member and / or
                            any third party service provider who receives your payment Instructions may process such payment Instructions solely based on the identifying
                            / account number without reference to the intended payee’s name.
                            We are not responsible for and have no duty to check any information you give us in your payment Instructions.
                            You authorise us to send your payment Instructions on your behalf to payment intermediaries and other third party service providers, so as to
                            carry out your payment Instructions.
                            We may set limits on transferring funds (for example, on the amount to be transferred or on how often you use the Service).
                            A third party service provider may charge commissions, fees or other charges in making a payment to an account nominated by you, which
                            may be deducted by the third party service provider from the funds paid to the beneficiary account, or they may be passed on to us. If any
                            commissions, fees and / or other charges are passed on to us, you will reimburse us accordingly. 
                            </small>
                          </li>
                      </ol>
                  </li>

                  <li class="mb-3">
                  <span class="font-weight-bold">GENERAL</span><br>
                      <ol type="a">
                          <li class="mb-1"> 
                            <small>
                            You confirm that you have obtained and / or will seek independent legal, tax, accounting, security and other advice in relation to any Account or
                            Service as you may require. We do not owe you any advisory, fiduciary or similar duty.
                            </small>
                          </li>
                          <li>
                              <small>
                              The following terms and conditions apply if you are a sole proprietorship: <br>
                                Liability: The owner of the sole proprietorship is bound by the Agreement, and are liable for all Losses, debts and other liabilities owed by
                                you to us, even if there are any changes in the way your sole proprietorship is constituted or you implement a name change. For sole
                                proprietors, the individual constituting the sole proprietorship is liable for all debts and other liabilities owed by you to us even if there are
                                any changes in the way the sole proprietorship is constituted, you implement a name change or the sole proprietorship no longer exists; <br>
                                Cessation as owner of sole proprietorship: Any person who stops being the owner of a sole proprietorship for any reason remains
                                liable for all debts and other liabilities owed to us which have accrued up to and including the date that such person ceases to be the
                                owner of the sole proprietorship; <br>
                                Changes in the sole proprietorship: You must promptly notify us in writing of any change in your sole proprietorship ownership or a
                                name change; <br>
                                Right to vary: We may vary, change or withdraw any of the Services where there are changes in the ownership of the sole proprietorship
                                or a name change; and <br>
                                Right to disclose: We may, upon your death or mental incapacity, disclose any information in relation to your Account, to your legal
                                representative and their legal advisers, your donee under a lasting power of attorney or deputy appointed under a court order, and a
                                member of your immediate family for the purpose of allowing him/her to make payment on your Account, or for any other purpose related
                                to the managing of your Account.

                              </small>
                          </li>
                          <li>
                            <small>
                              Security means any agreement or arrangement in place to secure an obligation you may owe us. For example, this may include a mortgage,
                              charge, pledge, lien or security assignment. We can rely on the security provided if you breach the Agreement and if we need to recover money
                              you owe us. We may ask you to give us security for certain Services.
                            </small>
                          </li>
                          <li>
                            <small>
                              Ownership of and all Intellectual Property Rights in the System Materials, Straight2Bank Services or our website remain vested in us or any
                              other party we have contracted with. You must not change, decompile, reverse engineer or make copies or derivative works of any Software or
                              incorporate third party software into the Software without our prior consent. Any such modification (whether approved or unapproved) will
                              remain our property or that of our service providers. You must not interfere with any System Materials or information stored on them or transfer,
                              share or sub-license the Software or any System Materials or copy them without our prior written consent. All licenses to use any Software are
                              revocable, non-exclusive, non-transferable and subject to compliance with any additional licence terms as we may notify you for the particular
                              Software provided. If the Software is subject to open source licenses, you must use it in accordance with the terms of the applicable licenses.
                              You will only use Software for the purpose for which we provided it to you and you must not use it in combination with other systems if it is not
                              for the purpose of receiving the Service. You must not move the Software outside of the country where it was first installed.
                            </small>
                          </li>
                          <li>
                            <small>
                            Subject to applicable laws, Instructions, documents and communications which are: (a) digitally signed and supported by a Digital Certificate or
                            Electronic Key; or (b) accepted via an electronic Channel (including click-through or any other form of digital authentication), have been
                            authorised by you and will have the same legal effect, validity and enforceability as if signed in writing. We may rely on such acceptance
                            without inquiry as to the authority of the person acting on your behalf.
                            </small>
                          </li>
                      </ol>
                  </li>


                
                </ol>
              </div>
           </div>

         

        </div><!--/.main-content -->



<!--  include footer -->
<?php include 'includes/footer.php'; ?>