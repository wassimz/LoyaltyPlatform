<?php
/**
 * @var \App\DTO\PartnerPageData $partnerPage
 */
?>
<div class="tab-content tab-content_viewtype_centered is-hide js-tab-content" data-id="confirm-merge-by-phone">
  <div class="tab-content__in">
    <div class="tab-content__header">
      <h2 class="tab-content__title">
        <?= __("Confirmation code is sent to you through SMS") ?>
      </h2>
      <span class="tab-content__subtitle tab-content__subtitle_viewtype_small i i_content_breakline">
        <span class="i__text"><?= __("An account with entered phone number already exists - to confirm your identity, please enter the code we sent you in the form below") ?>.</span>
      </span>
    </div>
    <div class="tab-content__body">
      <form action="{{ $partnerPage->partner->mergeByPhoneUrl }}" class="form form_content_auth js-ajax-form" method="post">
        <input type="hidden" class="js-merge-phone" name="phone">
        <fieldset class="form-fields-group">
          <ul class="form-fields-list">
            <li class="form-fields-list__item">
              <ul class="form-fields-groupbox form-fields-groupbox_content_auth-form">
                <li class="form-fields-groupbox__section">
                  <div class="field-composition">
                    <div class="field-composition__content">
                      <div class="form-field-box">
                        <input
                          type="text"
                          class="form-field form-field_type_text c-primary-input"
                          name="token"
                          data-validate="true"
                          data-required="true"
                          required
                        >
                        <label class="form-field-label form-field-label_viewtype_float c-primary-label" for="email">
                          <?= __("Confirmation code from the SMS") ?>
                        </label>
                      </div>
                      <small class="input-error js-input-error"></small>
                    </div>
                  </div>
                </li>

                <li class="form-fields-groupbox__section">
                  <button class="button button_type_block button_viewtype_primary c-primary-button js-loader" type="submit">
                  <span class="button__text">
                    <?= __("Continue") ?>
                  </span>
                  </button>
                </li>
              </ul>
            </li>
          </ul>
        </fieldset>
      </form>
    </div>
  </div>
  <button class="back-button i i_content_mobile-no-display js-go-button" data-id="login">
    <svg class="back-button__icon">
      <use xlink:href="#back-arrow"></use>
    </svg>
    <?= __("Back") ?>
  </button>
</div>
