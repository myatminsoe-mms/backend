<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Ability.
 *
 * @property int $id
 * @property string|null $action
 * @property string|null $subject
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $created_by
 * @property int|null $updated_by
 * @method static \Illuminate\Database\Eloquent\Builder|Ability newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Ability newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Ability query()
 * @method static \Illuminate\Database\Eloquent\Builder|Ability whereAction($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ability whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ability whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ability whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ability whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ability whereSubject($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ability whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ability whereUpdatedBy($value)
 * @mixin \Eloquent
 */
	class Ability extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\BaseModel.
 *
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel query()
 * @mixin \Eloquent
 */
	class BaseModel extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Category
 *
 * @property int $id
 * @property string $name
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category query()
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereUpdatedBy($value)
 */
	class Category extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Customer
 *
 * @property int $id
 * @property string|null $username
 * @property string $password
 * @property string $email
 * @property string|null $title
 * @property string $full_name
 * @property string $country_code
 * @property string|null $mobile_number
 * @property string|null $avatar
 * @property string $status
 * @property string $type
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Customer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Customer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Customer query()
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereCountryCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereFullName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereMobileNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereUsername($value)
 */
	class Customer extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Event
 *
 * @property int $id
 * @property string $title
 * @property int $organizer_id
 * @property string $organizer_name
 * @property string $event_template
 * @property int $type_id
 * @property string|null $type_name
 * @property int $category_id
 * @property string|null $category_name
 * @property string|null $slug
 * @property array|null $tags
 * @property string|null $alternative_domain
 * @property string|null $about
 * @property string $location_types
 * @property string|null $venue_address
 * @property string|null $online_address
 * @property string|null $map_url
 * @property \Illuminate\Support\Carbon|null $start_date
 * @property \Illuminate\Support\Carbon|null $end_date
 * @property string|null $start_time
 * @property string|null $end_time
 * @property array|null $banner_images
 * @property array|null $agenda
 * @property array|null $faqs
 * @property string|null $additional_information
 * @property array|null $event_images
 * @property array|null $sponsors
 * @property array|null $contact_information
 * @property array|null $social_links
 * @property string $event_status
 * @property string $visibility
 * @property int $is_attendee_info_mandatory
 * @property string|null $publish_at
 * @property string|null $end_at
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Category $category
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\EventTicket> $eventTickets
 * @property-read int|null $event_tickets_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \App\Models\Organizer $organizer
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @property-read \App\Models\Type $type
 * @method static \Illuminate\Database\Eloquent\Builder|Event newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Event newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Event query()
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereAbout($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereAdditionalInformation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereAgenda($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereAlternativeDomain($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereBannerImages($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereCategoryName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereContactInformation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereEndAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereEndTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereEventImages($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereEventStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereEventTemplate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereFaqs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereIsAttendeeInfoMandatory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereLocationTypes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereMapUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereOnlineAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereOrganizerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereOrganizerName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event wherePublishAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereSocialLinks($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereSponsors($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereStartTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereTags($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereTypeName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereVenueAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereVisibility($value)
 */
	class Event extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\EventTicket
 *
 * @property int $id
 * @property string $name
 * @property string $entry_date
 * @property string|null $price
 * @property int $event_id
 * @property string $ticket_types
 * @property int $initial_quantity
 * @property int|null $remaining_quantity
 * @property string $sale_start_at
 * @property string $sale_end_at
 * @property string|null $description
 * @property string|null $early_price
 * @property string|null $early_start_at
 * @property string|null $early_end_at
 * @property string $ticket_visibility
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property int|null $deleted_by
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Event $event
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|EventTicket newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EventTicket newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EventTicket onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|EventTicket query()
 * @method static \Illuminate\Database\Eloquent\Builder|EventTicket whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventTicket whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventTicket whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventTicket whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventTicket whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventTicket whereEarlyEndAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventTicket whereEarlyPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventTicket whereEarlyStartAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventTicket whereEntryDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventTicket whereEventId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventTicket whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventTicket whereInitialQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventTicket whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventTicket wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventTicket whereRemainingQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventTicket whereSaleEndAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventTicket whereSaleStartAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventTicket whereTicketTypes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventTicket whereTicketVisibility($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventTicket whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventTicket whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventTicket withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|EventTicket withoutTrashed()
 */
	class EventTicket extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Organizer
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property string $email
 * @property string|null $company_legal_name
 * @property string|null $position
 * @property string|null $company_phone
 * @property string|null $tax_payer_no
 * @property string|null $website
 * @property string|null $avatar
 * @property string $organizer_status
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Illuminate\Database\Eloquent\Builder|Organizer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Organizer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Organizer query()
 * @method static \Illuminate\Database\Eloquent\Builder|Organizer whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Organizer whereCompanyLegalName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Organizer whereCompanyPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Organizer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Organizer whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Organizer whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Organizer whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Organizer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Organizer whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Organizer whereOrganizerStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Organizer wherePosition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Organizer whereTaxPayerNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Organizer whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Organizer whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Organizer whereWebsite($value)
 */
	class Organizer extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Payment
 *
 * @property int $id
 * @property int $payable_id
 * @property string $payable_type
 * @property string $amount
 * @property string $payment_date
 * @property string $payment_status
 * @property string $payment_method
 * @property string|null $transaction_id
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Payment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Payment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Payment query()
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment wherePayableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment wherePayableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment wherePaymentDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment wherePaymentMethod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment wherePaymentStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereTransactionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereUpdatedBy($value)
 */
	class Payment extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Purchase
 *
 * @property int $id
 * @property int $checkout_id
 * @property int $customer_id
 * @property string $customer_name
 * @property int $event_id
 * @property string $event_title
 * @property string $total_amount
 * @property string|null $status
 * @property string|null $customer_type
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase query()
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereCheckoutId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereCustomerName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereCustomerType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereEventId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereEventTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereTotalAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereUpdatedBy($value)
 */
	class Purchase extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PurchaseTicket
 *
 * @property int $id
 * @property int $purchase_id
 * @property int $customer_id
 * @property string $customer_name
 * @property int $event_id
 * @property string $event_title
 * @property int $event_ticket_id
 * @property string $event_ticket_name
 * @property string $price
 * @property string|null $ticket_number
 * @property string|null $attendee_name
 * @property string|null $attendee_email
 * @property string|null $attendee_phone
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseTicket newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseTicket newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseTicket query()
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseTicket whereAttendeeEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseTicket whereAttendeeName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseTicket whereAttendeePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseTicket whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseTicket whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseTicket whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseTicket whereCustomerName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseTicket whereEventId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseTicket whereEventTicketId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseTicket whereEventTicketName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseTicket whereEventTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseTicket whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseTicket wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseTicket wherePurchaseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseTicket whereTicketNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseTicket whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchaseTicket whereUpdatedBy($value)
 */
	class PurchaseTicket extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Role.
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Ability> $abilities
 * @property-read int|null $abilities_count
 * @method static \Illuminate\Database\Eloquent\Builder|Role newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Role newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Role query()
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereUpdatedBy($value)
 * @mixin \Eloquent
 * @property string|null $description
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereDescription($value)
 */
	class Role extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\RoleAbility.
 *
 * @property int                             $id
 * @property int                             $role_id
 * @property int                             $ability_id
 * @property \Illuminate\Support\Carbon      $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|RoleAbility newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RoleAbility newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RoleAbility query()
 * @method static \Illuminate\Database\Eloquent\Builder|RoleAbility whereAbilityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RoleAbility whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RoleAbility whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RoleAbility whereRoleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RoleAbility whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class RoleAbility extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Tag
 *
 * @property int $id
 * @property string $name
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Tag newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tag newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tag query()
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereUpdatedBy($value)
 */
	class Tag extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Token
 *
 * @property int $id
 * @property string $token
 * @property string $action
 * @property int $authenticable_id
 * @property string $authenticable_type
 * @property int $is_completed
 * @property string $expired_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Token newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Token newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Token query()
 * @method static \Illuminate\Database\Eloquent\Builder|Token whereAction($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Token whereAuthenticableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Token whereAuthenticableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Token whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Token whereExpiredAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Token whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Token whereIsCompleted($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Token whereToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Token whereUpdatedAt($value)
 */
	class Token extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Type
 *
 * @property int $id
 * @property string $name
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Type newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Type newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Type query()
 * @method static \Illuminate\Database\Eloquent\Builder|Type whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Type whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Type whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Type whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Type whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Type whereUpdatedBy($value)
 */
	class Type extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\UploadFile
 *
 * @property int $id
 * @property string $file_url
 * @property int|null $model_id
 * @property string|null $model_name
 * @property int $is_completed
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $created_by
 * @property int|null $updated_by
 * @method static \Illuminate\Database\Eloquent\Builder|UploadFile newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UploadFile newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UploadFile query()
 * @method static \Illuminate\Database\Eloquent\Builder|UploadFile whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UploadFile whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UploadFile whereFileUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UploadFile whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UploadFile whereIsCompleted($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UploadFile whereModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UploadFile whereModelName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UploadFile whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UploadFile whereUpdatedBy($value)
 */
	class UploadFile extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $username
 * @property mixed $password
 * @property int $role_id
 * @property string|null $email
 * @property string|null $title
 * @property string $full_name
 * @property string $country_code
 * @property string|null $mobile_number
 * @property string|null $avatar
 * @property string $status
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property-read mixed $role_name
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \App\Models\Role $role
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCountryCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereFullName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereMobileNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRoleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUsername($value)
 */
	class User extends \Eloquent {}
}

