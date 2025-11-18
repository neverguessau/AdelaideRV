<div id="mc_embed_shell" class="mailchimp-wrapper">
    <div id="mc_embed_signup">
        <div class="hs-form-html" data-region="ap1" data-form-id="50d647f6-8cc1-4208-b072-716a067b3956" data-portal-id="50319163"></div>
    </div>
</div>
<style>
    /* ===== HubSpot form → pill email + button (max 450px) ===== */

    /* remove card chrome and heading */
    #mc_embed_shell [data-hsfc-id=Renderer] .hsfc-Step {
        background: none !important;
        box-shadow: none !important;
        border: 0 !important;
        padding: 0 !important;
    }
    #mc_embed_shell [data-hsfc-id=Renderer] .hsfc-Heading,
    #mc_embed_shell [data-hsfc-id=Renderer] [data-hsfc-id=FieldLabel] {
        display: none !important;
    }

    /* let child rows flow inline */
    #mc_embed_shell [data-hsfc-id=Renderer] .hsfc-Row,
    #mc_embed_shell [data-hsfc-id=Renderer] .hsfc-NavigationRow {
        display: contents;
        margin: 0 !important;
    }

    /* single row container with cap at 450px */
    #mc_embed_shell [data-hsfc-id=Renderer] .hsfc-Step .hsfc-Step__Content {
        position: relative;            /* for absolute error placement */
        display: flex;
        flex-wrap: nowrap;             /* prevent wrap when errors show */
        align-items: center;
        justify-content: center;
        gap: 0;
        max-width: 450px;
        margin: 0 auto;
        padding: 0 !important;
        padding-bottom: 26px;          /* space reserved for error line */
    }

    /* input (left pill) */
    #mc_embed_shell [data-hsfc-id=Renderer] .hsfc-EmailField .hsfc-TextInput {
        flex: 1 1 auto;
        height: 48px !important;
        padding: 14px 15px !important;
        font-size: 13px !important;
        line-height: 1.2 !important;
        border: 1px solid #cfcfcf !important;
        border-right: 0 !important;
        border-radius: 5px 0 0 5px !important;
        background: #fff !important;
        color: #21353a !important;
        box-sizing: border-box;
    }

    /* remove focus outline on input */
    #mc_embed_shell [data-hsfc-id=Renderer] .hsfc-TextInput:focus {
        outline: none !important;
        box-shadow: none !important;
    }

    /* consistent placeholder color */
    #mc_embed_shell [data-hsfc-id=Renderer] .hsfc-EmailField .hsfc-TextInput::placeholder {
        color: #9aa3ad !important;
    }

    /* button (right pill) */
    #mc_embed_shell [data-hsfc-id=Renderer] .hsfc-NavigationRow__Buttons [data-hsfc-id=Button].hsfc-Button {
        display: inline-flex !important;
        align-items: center;
        justify-content: center;
        white-space: nowrap;
        height: 48px !important;
        padding: 0 15px !important;
        border: 1px solid #577B59 !important;
        border-radius: 0 5px 5px 0 !important;
        background-color: #577B59 !important;
        color: #fff !important;
        font-size: 16px !important;
        font-weight: 100 !important;
        letter-spacing: 0 !important;
        box-shadow: none !important;
        transform: none !important;
    }

    /* hover invert */
    #mc_embed_shell [data-hsfc-id=Renderer] .hsfc-Button:not([disabled]):hover {
        background: #fff !important;
        color: #577B59 !important;
        border-color: #577B59 !important;
        transform: none !important;
    }

    /* keep the error from breaking layout: pin it below the pill row */
    #mc_embed_shell [data-hsfc-id=Renderer] .hsfc-NavigationRow__Alerts {
        display: none !important;
    }
    /* reserve space under the pill for errors */
    #mc_embed_shell [data-hsfc-id=Renderer] .hsfc-Step .hsfc-Step__Content {
        padding-bottom: 26px !important;
    }

    /* anchor the field-level error to the email field so it doesn't push the button */
    #mc_embed_shell [data-hsfc-id=Renderer] .hsfc-EmailField {
        position: relative;
    }
    #mc_embed_shell [data-hsfc-id=Renderer] .hsfc-EmailField .hsfc-ErrorAlert {
        position: absolute !important;
        top: calc(100% + 6px);
        left: 0;
        width: 100%;
        margin: 0 !important;
        font-size: 12px !important;
        line-height: 1.3 !important;
    }

    /* keep the input from showing focus outline */
    #mc_embed_shell [data-hsfc-id=Renderer] .hsfc-TextInput:focus {
        outline: none !important;
        box-shadow: none !important;
    }


    /* autofill neutralization (Chrome) */
    #mc_embed_shell input:-webkit-autofill {
        -webkit-box-shadow: 0 0 0 30px #fff inset !important;
        -webkit-text-fill-color: #21353a !important;
    }
    /* keep space for the error line */
    #mc_embed_shell [data-hsfc-id=Renderer] .hsfc-Step .hsfc-Step__Content {
        padding-bottom: 26px !important;
    }

    /* pull any field-level error out of the flex row */
    #mc_embed_shell [data-hsfc-id=Renderer] .hsfc-Step .hsfc-Step__Content > .hsfc-ErrorAlert,
    #mc_embed_shell [data-hsfc-id=Renderer] .hsfc-EmailField .hsfc-ErrorAlert {
        position: absolute !important;
        left: 0;
        top: calc(48px + 6px);
        width: 100%;
        margin: 0 !important;
        font-size: 12px !important;
        line-height: 1.3 !important;
    }
    /* 1) Make the email field the positioning context */
    #mc_embed_shell [data-hsfc-id=Renderer] .hsfc-EmailField {
        position: relative !important;
    }

    /* 2) Absolutely position the field-level error so it doesn't affect layout */
    #mc_embed_shell [data-hsfc-id=Renderer] .hsfc-EmailField .hsfc-ErrorAlert {
        position: absolute !important;
        left: 0;
        top: calc(100% + 6px);
        width: 100%;
        margin: 0 !important;
        line-height: 1.3 !important;
    }

    /* 3) Kill HubSpot’s default “gap between siblings” inside the EmailField */
    #mc_embed_shell [data-hsfc-id=Renderer] .hsfc-EmailField > *:not(:last-child) {
        margin-bottom: 0 !important;
    }

    /* 4) Reserve space under the pill row for the error line */
    #mc_embed_shell [data-hsfc-id=Renderer] .hsfc-Step .hsfc-Step__Content {
        padding-bottom: 28px !important;
    }

    [data-hsfc-id=Renderer] .hsfc-RichText p {
        background: white;
        border-radius: 5px;
        padding: 1em;
    }
    #mc_embed_shell [data-hsfc-id=Renderer] .hsfc-NavigationRow__Buttons:has(>*:only-child){
        justify-content: start !important;
    }

</style>