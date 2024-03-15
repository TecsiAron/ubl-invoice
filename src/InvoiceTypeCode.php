<?php

namespace NumNum\UBL;

/**
 * All possible Unit Codes that can be used
 * To extend, see also: http://tfig.unece.org/contents/recommendation-20.htm
 */
enum InvoiceTypeCode: int
{
    case INVOICE = 380;
    case CREDIT_NOTE = 381;
    case DEBIT_NOTE = 383;
    case CORRECTED_INVOICE = 384;
    case ADVANCE_INVOICE = 386;
    case SELF_BILLING_INVOICE = 389;
}
