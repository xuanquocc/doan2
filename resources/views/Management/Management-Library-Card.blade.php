<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Management Library Card</title>
    @include('library.Card')
  </head>
  <body class="u-body u-xl-mode" data-lang="en"><header class="u-clearfix u-header u-header" id="sec-520b"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <a href="https://nicepage.com" class="u-image u-logo u-image-1">
          <img src="images/default-logo.png" class="u-logo-image u-logo-image-1">
        </a>
      </div></header>
    <section class="u-align-center u-clearfix u-section-1" id="sec-c416">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-expanded-width u-tab-links-align-left u-tabs u-tabs-1">
          <ul class="u-border-2 u-border-palette-1-base u-spacing-10 u-tab-list u-unstyled" role="tablist">
            <li class="u-tab-item" role="presentation">
              <a class="active u-active-palette-1-base u-button-style u-grey-10 u-tab-link u-text-active-white u-text-black u-tab-link-1" id="link-tab-0da5" href="#tab-0da5" role="tab" aria-controls="tab-0da5" aria-selected="true">Quản lí</a>
            </li>
            <li class="u-tab-item" role="presentation">
              <a class="u-active-palette-1-base u-button-style u-grey-10 u-tab-link u-text-active-white u-text-black u-tab-link-2" id="link-tab-14b7" href="#tab-14b7" role="tab" aria-controls="tab-14b7" aria-selected="false">Thêm</a>
            </li>
          </ul>
          <div class="u-tab-content">
            <div class="u-container-style u-tab-active u-tab-pane u-white u-tab-pane-1" id="tab-0da5" role="tabpanel" aria-labelledby="link-tab-0da5">
              <div class="u-container-layout u-valign-top u-container-layout-1">
                <h4 class="u-text u-text-default u-text-1">Phiếu mượn:&nbsp;</h4>
                <div class="u-expanded-width u-table u-table-responsive u-table-1">
                  <table class="u-table-entity">
                    <colgroup>
                      <col width="20%">
                      <col width="20%">
                      <col width="20%">
                      <col width="20%">
                      <col width="20%">
                    </colgroup>
                    <tbody class="u-table-alt-grey-5 u-table-body">
                      <tr style="height: 36px;">
                        <td class="u-table-cell">Mã phiếu mượn</td>
                        <td class="u-table-cell">Mã độc giả</td>
                        <td class="u-table-cell">Mã sách</td>
                        <td class="u-table-cell">Tên sách</td>
                        <td class="u-table-cell">Số lượng</td>
                      </tr>
                      <tr style="height: 51px;">
                        <td class="u-table-cell">Row 1</td>
                        <td class="u-table-cell">Description</td>
                        <td class="u-table-cell">Description</td>
                        <td class="u-table-cell">Description</td>
                        <td class="u-table-cell">Description</td>
                      </tr>
                      <tr style="height: 51px;">
                        <td class="u-table-cell">Row 2</td>
                        <td class="u-table-cell">Description</td>
                        <td class="u-table-cell">Description</td>
                        <td class="u-table-cell">Description</td>
                        <td class="u-table-cell">Description</td>
                      </tr>
                      <tr style="height: 51px;">
                        <td class="u-table-cell">Row 3</td>
                        <td class="u-table-cell">Description</td>
                        <td class="u-table-cell">Description</td>
                        <td class="u-table-cell">Description</td>
                        <td class="u-table-cell">Description</td>
                      </tr>
                      <tr style="height: 52px;">
                        <td class="u-table-cell">Row 4</td>
                        <td class="u-table-cell">Description</td>
                        <td class="u-table-cell">Description</td>
                        <td class="u-table-cell">Description</td>
                        <td class="u-table-cell">Description</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="u-align-left u-container-style u-tab-pane u-white u-tab-pane-2" id="tab-14b7" role="tabpanel" aria-labelledby="link-tab-14b7">
              <div class="u-container-layout u-valign-top u-container-layout-2">
                <div class="u-form u-form-1">
                  <form action="https://forms.nicepagesrv.com/Form/Process" class="u-clearfix u-form-spacing-17 u-form-vertical u-inner-form" source="email" name="form" style="padding: 18px;">
                    <div class="u-form-group u-form-name u-label-left">
                      <label for="name-ac8b" class="u-label u-spacing-2 u-label-1">Mã sách</label>
                      <input type="text" placeholder="Enter your Name" id="name-ac8b" name="name" class="u-border-2 u-border-grey-30 u-input u-input-rectangle u-radius-11 u-white u-input-1" required="">
                    </div>
                    <div class="u-form-email u-form-group u-label-left">
                      <label for="email-ac8b" class="u-label u-spacing-2 u-label-2">Tên</label>
                      <input type="email" placeholder="Enter a valid email address" id="email-ac8b" name="email" class="u-border-2 u-border-grey-30 u-input u-input-rectangle u-radius-11 u-white u-input-2" required="">
                    </div>
                    <div class="u-form-group u-form-message u-label-left">
                      <label for="message-ac8b" class="u-label u-spacing-2 u-label-3">Thể loại</label>
                      <textarea placeholder="Enter your message" rows="4" cols="50" id="message-ac8b" name="message" class="u-border-2 u-border-grey-30 u-input u-input-rectangle u-radius-11 u-white u-input-3" required=""></textarea>
                    </div>
                    <div class="u-form-group u-label-left u-form-group-4">
                      <label for="text-300c" class="u-label u-spacing-2 u-label-4">Input</label>
                      <input type="text" placeholder="" id="text-300c" name="text" class="u-border-2 u-border-grey-30 u-input u-input-rectangle u-radius-11 u-white u-input-4">
                    </div>
                    <div class="u-form-group u-form-submit u-label-left">
                      <label class="u-label u-spacing-2 u-label-5"></label>
                      <div class="u-align-left u-btn-submit-container">
                        <a href="#" class="u-btn u-btn-submit u-button-style">Submit</a>
                      </div>
                      <input type="submit" value="submit" class="u-form-control-hidden">
                    </div>
                    <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
                    <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then try again. </div>
                    <input type="hidden" value="" name="recaptchaResponse">
                    <input type="hidden" name="formServices" value="28282bc0053c88773dec0ca468872fc5">
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-d9d9"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Sample text. Click to select the Text Element.</p>
      </div></footer>
    <section class="u-backlink u-clearfix u-grey-80">
      <a class="u-link" href="https://nicepage.com/website-templates" target="_blank">
        <span>Website Templates</span>
      </a>
      <p class="u-text">
        <span>created with</span>
      </p>
      <a class="u-link" href="" target="_blank">
        <span>Website Builder Software</span>
      </a>. 
    </section>
  
</body></html>