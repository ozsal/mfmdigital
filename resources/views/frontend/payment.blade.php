@extends('frontend.layouts.app')
<style>
    .form-fields-message {
    color: #FF5A5F;
    font-family: "Inter", inter;
    font-weight: 700;
}
    </style>
@section('content')
<div class="page-content">
   <div data-elementor-type="wp-page" data-elementor-id="311" class="elementor elementor-311">
      <section class="elementor-section elementor-top-section elementor-element elementor-element-021df68 elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no" data-id="021df68" data-element_type="section">
         <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-fc048d4" data-id="fc048d4" data-element_type="column">
               <div class="elementor-widget-wrap elementor-element-populated">
                  <div class="elementor-element elementor-element-5434029 eael-ninja-form-labels-yes eael-ninja-form-button-custom elementor-widget elementor-widget-eael-ninja" data-id="5434029" data-element_type="widget" data-widget_type="eael-ninja.default">
                     <div class="elementor-widget-container">
                        <div class="eael-contact-form eael-ninja-form eael-contact-form-align-default" id="eael-ninja-form-311">
                           <div id="nf-form-3-cont" class="nf-form-cont" aria-live="polite" aria-labelledby="nf-form-title-3" aria-describedby="nf-form-errors-3" role="form">
                              <span id="form-title" class="form-title">
                                 <h3>Payment</h3>
                              </span>
                              <div class="nf-form-wrap ninja-forms-form-wrap">
                                 <div class="nf-response-msg"></div>
                                 <div class="nf-debug-msg"></div>
                                 <div class="nf-before-form">
                                    <nf-section>
                                    </nf-section>
                                 </div>
                                 <div class="nf-form-layout">
                                    <form>
                                       <div>
                                          <div class="nf-before-form-content">
                                             <nf-section>
                                                <div class="form-fields-message">Please ensure that you fill out the form after making the payment, using the transaction ID or reference code that matches your payment.</div>
                                                <div class="nf-form-fields-required">Fields marked with an <span class="ninja-forms-req-symbol">*</span> are required</div>
                                             </nf-section>
                                          </div>
                                          <div class="nf-form-content ">
                                             <nf-fields-wrap>
                                                <nf-field>
                                                   <div id="nf-field-7-container" class="nf-field-container firstname-container  label-above ">
                                                      <div class="nf-before-field">
                                                         <nf-section>
                                                         </nf-section>
                                                      </div>
                                                      <div class="nf-field">
                                                         <div id="nf-field-7-wrap" class="field-wrap firstname-wrap nf-fail nf-error" data-field-id="7">
                                                            <div class="nf-field-label">
                                                               <label for="nf-field-7" id="nf-label-field-7" class="">
                                                               Full Name <span class="ninja-forms-req-symbol">*</span> 
                                                               </label>
                                                            </div>
                                                            <div class="nf-field-element">
                                                               <input type="text" value="" class="ninja-forms-field nf-element" id="nf-field-7" name="fname" autocomplete="given-name" placeholder="Enter your full name. " aria-invalid="true" aria-describedby="nf-error-7" aria-labelledby="nf-label-field-7" aria-required="true" required="">
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="nf-after-field">
                                                         <nf-section>
                                                            <div class="nf-input-limit"></div>
                                                            <div id="nf-error-7" class="nf-error-wrap nf-error" role="alert">
                                                               <div class="nf-error-msg nf-error-required-error">This is a required field.</div>
                                                            </div>
                                                         </nf-section>
                                                      </div>
                                                   </div>
                                                </nf-field>
                                                <nf-field>
                                                   <div id="nf-field-8-container" class="nf-field-container email-container  label-above ">
                                                      <div class="nf-before-field">
                                                         <nf-section>
                                                         </nf-section>
                                                      </div>
                                                      <div class="nf-field">
                                                         <div id="nf-field-8-wrap" class="field-wrap email-wrap" data-field-id="8">
                                                            <div class="nf-field-label">
                                                               <label for="nf-field-8" id="nf-label-field-8" class="">
                                                               Email <span class="ninja-forms-req-symbol">*</span> 
                                                               </label>
                                                            </div>
                                                            <div class="nf-field-element">
                                                               <input type="email" value="" class="ninja-forms-field nf-element" id="nf-field-8" name="email" autocomplete="email" placeholder="Enter the email address where you want the material to be sent. " aria-invalid="false" aria-describedby="nf-error-8" aria-labelledby="nf-label-field-8" aria-required="true" required="">
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="nf-after-field">
                                                         <nf-section>
                                                            <div class="nf-input-limit"></div>
                                                            <div id="nf-error-8" class="nf-error-wrap nf-error" role="alert"></div>
                                                         </nf-section>
                                                      </div>
                                                   </div>
                                                </nf-field>
                                                <nf-field>
                                                   <div id="nf-field-9-container" class="nf-field-container phone-container  label-above  textbox-container">
                                                      <div class="nf-before-field">
                                                         <nf-section>
                                                         </nf-section>
                                                      </div>
                                                      <div class="nf-field">
                                                         <div id="nf-field-9-wrap" class="field-wrap phone-wrap textbox-wrap" data-field-id="9">
                                                            <div class="nf-field-label">
                                                               <label for="nf-field-9" id="nf-label-field-9" class="">
                                                               Phone <span class="ninja-forms-req-symbol">*</span> 
                                                               </label>
                                                            </div>
                                                            <div class="nf-field-element">
                                                               <input type="tel" value="" class="ninja-forms-field nf-element" id="nf-field-9" name="phone" autocomplete="tel" placeholder="Enter the mobile number where we can contact. " aria-invalid="false" aria-describedby="nf-error-9" aria-labelledby="nf-label-field-9" aria-required="true" required="">
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="nf-after-field">
                                                         <nf-section>
                                                            <div class="nf-input-limit"></div>
                                                            <div id="nf-error-9" class="nf-error-wrap nf-error" role="alert"></div>
                                                         </nf-section>
                                                      </div>
                                                   </div>
                                                </nf-field>
                                                <nf-field>
                                                   <div id="nf-field-10-container" class="nf-field-container textbox-container  label-above ">
                                                      <div class="nf-field">
                                                         <div id="nf-field-10-wrap" class="field-wrap textbox-wrap" data-field-id="10">
                                                            <div class="nf-field-label">
                                                               <label for="nf-field-10" id="nf-label-field-10" class="">
                                                               Transaction ID <span class="ninja-forms-req-symbol">*</span> 
                                                               </label>
                                                            </div>
                                                            <div class="nf-field-element">
                                                               <input type="text" value="" class="ninja-forms-field nf-element" placeholder="Use the same transaction ID on your receipt. " id="nf-field-10" name="nf-field-10" aria-invalid="false" aria-describedby="nf-error-10" aria-labelledby="nf-label-field-10" aria-required="true" required="">
                                                            </div>
                                                            <div class="nf-field-description">
                                                               <p><b>Use the same transaction that you have used while payment.&nbsp;</b><br></p>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="nf-after-field">
                                                         <nf-section>
                                                            <div class="nf-input-limit"></div>
                                                            <div id="nf-error-10" class="nf-error-wrap nf-error" role="alert"></div>
                                                         </nf-section>
                                                      </div>
                                                   </div>
                                                </nf-field>
                                                <nf-field>
                                                   <div id="nf-field-11-container" class="nf-field-container submit-container  label-above  textbox-container">
                                                      <div class="nf-field">
                                                         <div id="nf-field-11-wrap" class="field-wrap submit-wrap textbox-wrap" data-field-id="11">
                                                            <div class="nf-field-label"></div>
                                                            <div class="nf-field-element">
                                                               <input id="nf-field-11" class="ninja-forms-field nf-element " type="submit" value="Submit" aria-disabled="true" disabled="true">
                                                            </div>
                                                            <div class="nf-error-wrap"></div>
                                                         </div>
                                                      </div>
                                                      <div class="nf-after-field">
                                                         <nf-section>
                                                            <div class="nf-input-limit"></div>
                                                            <div id="nf-error-11" class="nf-error-wrap nf-error" role="alert"></div>
                                                         </nf-section>
                                                      </div>
                                                   </div>
                                                </nf-field>
                                             </nf-fields-wrap>
                                          </div>
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
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-4a4a1e9" data-id="4a4a1e9" data-element_type="column">
               <div class="elementor-widget-wrap elementor-element-populated">
                  <div class="elementor-element elementor-element-8c0be9b elementor-widget elementor-widget-heading" data-id="8c0be9b" data-element_type="widget" data-widget_type="heading.default">
                     <div class="elementor-widget-container">
                        <style>/*! elementor - v3.14.0 - 26-06-2023 */
                           .elementor-heading-title{padding:0;margin:0;line-height:1}.elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a{color:inherit;font-size:inherit;line-height:inherit}.elementor-widget-heading .elementor-heading-title.elementor-size-small{font-size:15px}.elementor-widget-heading .elementor-heading-title.elementor-size-medium{font-size:19px}.elementor-widget-heading .elementor-heading-title.elementor-size-large{font-size:29px}.elementor-widget-heading .elementor-heading-title.elementor-size-xl{font-size:39px}.elementor-widget-heading .elementor-heading-title.elementor-size-xxl{font-size:59px}
                        </style>
                        <h1 class="elementor-heading-title elementor-size-default">BANK DETAILS</h1>
                     </div>
                  </div>
                  <div class="elementor-element elementor-element-c0881ea elementor-widget elementor-widget-text-editor" data-id="c0881ea" data-element_type="widget" data-widget_type="text-editor.default">
                     <div class="elementor-widget-container">
                        Money gallery<br>
                        00400100414420000001<br>
                        Jyoti bikash bank<br>						
                     </div>
                  </div>
                  <div class="elementor-element elementor-element-3da5464 elementor-widget elementor-widget-image" data-id="3da5464" data-element_type="widget" data-widget_type="image.default">
                     <div class="elementor-widget-container">
                        <style>/*! elementor - v3.14.0 - 26-06-2023 */
                           .elementor-widget-image{text-align:center}.elementor-widget-image a{display:inline-block}.elementor-widget-image a img[src$=".svg"]{width:48px}.elementor-widget-image img{vertical-align:middle;display:inline-block}
                        </style>
                        <img decoding="async" width="800" height="800" src="https://mfmdigitalnepal.com/wp-content/uploads/2023/06/Your-paragraph-text-1024x1024.png" class="attachment-large size-large wp-image-313" alt="" loading="lazy" srcset="https://mfmdigitalnepal.com/wp-content/uploads/2023/06/Your-paragraph-text-1024x1024.png 1024w, https://mfmdigitalnepal.com/wp-content/uploads/2023/06/Your-paragraph-text-300x300.png 300w, https://mfmdigitalnepal.com/wp-content/uploads/2023/06/Your-paragraph-text-150x150.png 150w, https://mfmdigitalnepal.com/wp-content/uploads/2023/06/Your-paragraph-text-768x768.png 768w, https://mfmdigitalnepal.com/wp-content/uploads/2023/06/Your-paragraph-text.png 1080w" sizes="(max-width: 800px) 100vw, 800px">															
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </div>
</div>
@endsection