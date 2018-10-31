<?php

namespace common\enums\rbac;

use yii2lab\misc\enums\BaseEnum;

/**
 * Class PermissionEnum
 * 
 * Этот класс был сгенерирован автоматически.
 * Не вносите в данный файл изменения, они затрутся при очередной генерации.
 * Изменить набор констант можно через управление RBAC в админке.
 * 
 * @package common\enums\rbac
 */
class PermissionEnum extends BaseEnum {

	const BACKEND_ALL = 'oBackendAll';

	const GEO_CITY_MANAGE = 'oGeoCityManage';

	const GEO_COUNTRY_MANAGE = 'oGeoCountryManage';

	const GEO_CURRENCY_MANAGE = 'oGeoCurrencyManage';

	const SERVICE_CATEGORY_MANAGE = 'oServiceCategoryManage';

	const REST_CLIENT_ALL = 'oRestClientAll';

	const SERVICE_SERVICE_MANAGE = 'oServiceServiceManage';

	const USER_PROFILE_ALL = 'oUserProfileAll';

	const ACTIVE_FIELD_MANAGE = 'oActiveFieldManage';

	const ACTIVE_TYPE_MANAGE = 'oActiveTypeManage';

	const GEO_REGION_MANAGE = 'oGeoRegionManage';

	const NOTIFY_TRANSPORT_MANAGE = 'notify.transport.manage';

	const ARTICLE_POST_MANAGE = 'oArticlePostManage';

	const ARTICLE_DELETE_MANAGE = 'oArticleDeleteManage';

	const OFFLINE_MANAGE = 'oOfflineManage';

	const RBAC_MANAGE = 'oRbacManage';

	const GITHUB_MANAGE = 'oGithubManage';

	const LOGREADER_MANAGE = 'oLogreaderManage';

	const GII_MANAGE = 'oGiiManage';

	const LANG_MANAGE = 'oLangManage';

	const CLEANER_MANAGE = 'oCleanerManage';

	const NOTIFY_MANAGE = 'oNotifyManage';

	const APP_CONFIG = 'oAppConfig';

	const GUIDE_MODIFY = 'oGuideModify';

	// Управление композер-пакетами
	const VENDOR_MANAGE = 'oVendorManage';

	// Перепроведение операции покупки валюты в ACB
	const ACBREPAY_OPERATION = 'oACBRepayOperation';

	// Принять все заказы разом
	const ACCEPT_ALL_ORDERS = 'oAcceptAllOrders';

	// Принять запрос на перевод от пользователя
	const ACCEPT_TRANSFER_REQUEST = 'oAcceptTransferRequest';

	// Доступ к панели администрирования
	const ACCESS_ADMIN_PANEL = 'oAccessAdminPanel';

	// Доступ к кабинету администратора Билайн
	const ACCESS_BEELINE_ADMIN_CABINET = 'oAccessBeelineAdminCabinet';

	// Доступ в кабинет специалиста СПП Олимп/1xBet
	const ACCESS_BOOKMAKER_SPP_CABINET = 'oAccessBookmakerSppCabinet';

	// Доступ к кабинету финансиста
	const ACCESS_FINANCIAL_CABINET = 'oAccessFinancialCabinet';

	// Доступ к кабинету администратора Кселл
	const ACCESS_KCELL_ADMIN_CABINET = 'oAccessKcellAdminCabinet';

	// Доступ к кабинету маркетолога
	const ACCESS_MARKETOLOG_CABINET = 'oAccessMarketologCabinet';

	// Доступ в кабинет партнера - платформы для мерчантов (маркетплейса)
	const ACCESS_MERCHANT_ADMIN_CABINET = 'oAccessMerchantAdminCabinet';

	// Доступ в кабинет партнёра
	const ACCESS_PARTNER_CABINET = 'oAccessPartnerCabinet';

	// Доступ к кабинету администратора Ресми
	const ACCESS_RESMI_ADMIN_CABINET = 'oAccessResmiAdminCabinet';

	// Доступ к кабинету маркетолога Resmi
	const ACCESS_RESMI_MARKETOLOG_CABINET = 'oAccessResmiMarketologCabinet';

	// Доступ к кабинету тех. поддержки Ресми
	const ACCESS_RESMI_SPP_CABINET = 'oAccessResmiSppCabinet';

	// Активировать комиссию
	const ACTIVATE_COMMISSION = 'oActivateCommission';

	// Добавление города
	const ADD_CITY = 'oAddCity';

	// Добавление страны
	const ADD_COUNTRY = 'oAddCountry';

	// Добавление пользователя в акцию
	const ADD_EVENT_PARTICIPANT = 'oAddEventParticipant';

	// Добавление пользователей массивом
	const ADD_EVENT_PARTICIPANTS = 'oAddEventParticipants';

	// Добавление сервиса к акции
	const ADD_EVENT_SERVICE = 'oAddEventService';

	// Добавление в акцию SubjectType
	const ADD_EVENT_SUBJECT_TYPE = 'oAddEventSubjectType';

	// Добавление комментария к операции
	const ADD_OPERATION_DESCRIPTION = 'oAddOperationDescription';

	// Оплата с помощью безадресного перевода
	const ADDRESSLESS_TRANSFER_USER_OPERATIONS = 'oAddresslessTransferUserOperations';

	// Создание сервиса
	const ADD_SERVICE = 'oAddService';

	// Добавление группы услуг
	const ADD_SERVICE_GROUP = 'oAddServiceGroup';

	// Право квитовать гашение агентов
	const AGENT_KVITAN = 'oAgentKvitan';

	// Сброс пароля для любого пользователя
	const ANY_SUBJECT_PASSWORD_RESET = 'oAnySubjectPasswordReset';

	// Присвоение роли
	const ASSIGN_ROLE = 'oAssignRole';

	// Права для всех вошедших пользователей системы
	const AUTHORIZED_ACTIONS = 'oAuthorizedActions';

	// Блокировка пользователя СПП портала «Билайн»
	const BEELINE_BLOCK_USER = 'oBeelineBlockUser';

	// Сброс пароля сотрудника СПП портала «Билайн»
	const BEELINE_PASSWORD_RESET = 'oBeelinePasswordReset';

	// Отправка СМС через шлюз Билайн
	const BEELINE_SMSNOTIFICATION = 'oBeelineSMSNotification';

	// Разблокировка сотрудника СПП портала «Билайн»
	const BEELINE_UNBLOCK_USER = 'oBeelineUnblockUser';

	// The right to invoke BeelineUSSDOperation
	const BEELINE_USSD = 'oBeelineUSSD';

	// Отмена биллинговых операций
	const BILLING_CANCEL_OPERATION = 'oBillingCancelOperation';

	// Перепроведение операции в биллинге
	const BILLING_REPAY_OPERATION = 'oBillingRepayOperation';

	// Блокировка денежной операции
	const BLOCK_OPERATION = 'oBlockOperation';

	// Блокирование перевода, платежа
	const BLOCK_PAYMENT = 'oBlockPayment';

	// Блокировка пользователя
	const BLOCK_USER = 'oBlockUser';

	// Списание с брокера на кошелёк wooppay
	const BROKER_WITHDRAW = 'oBrokerWithdraw';

	// Отмена операции перевода на банковский счет
	const CANCEL_BANK_TRANSFER = 'oCancelBankTransfer';

	// Отмена входящей операции
	const CANCEL_INCOMING_OPERATION = 'oCancelIncomingOperation';

	// Отмена операции
	const CANCEL_OPERATION = 'oCancelOperation';

	// Отмена операции со статусом waiting
	const CANCEL_WAITING_OPERATION = 'oCancelWaitingOperation';

	// Смена статуса комиссии
	const CHANGE_COMMISSION_STATUS = 'oChangeCommissionStatus';

	// Возможность смены владельца любой операции
	const CHANGE_OPERATION_OWNER = 'oChangeOperationOwner';

	// Смена платежного аккаунта в операции платежа
	const CHANGE_OPERATIONS_PAYMENT_ACCOUNT = 'oChangeOperationsPaymentAccount';

	// Смена статуса операции (некое спец.апи для неведомого партнера)
	const CHANGE_OPERATION_STATUS = 'oChangeOperationStatus';

	// Смена статуса субъекта
	const CHANGE_STATUS = 'oChangeStatus';

	// Смена статуса субъекта на Действующий
	const CHANGE_SUBJECT_STATUS_TO_ACTIVE = 'oChangeSubjectStatusToActive';

	// Смена статуса субъекта на Создан
	const CHANGE_SUBJECT_STATUS_TO_CREATED = 'oChangeSubjectStatusToCreated';

	// Смена статуса субъекта на На рассмотрении
	const CHANGE_SUBJECT_STATUS_TO_MODERATING = 'oChangeSubjectStatusToModerating';

	// Смена типа пользователя
	const CHANGE_TYPE = 'oChangeType';

	// Проверка документа ПШЭП
	const CHECK_DOCUMENT = 'oCheckDocument';

	// Проверяет разрешена ли оплата инвойсов мерчанта через epay
	const CHECK_HAS_EPAY_PERCENT0 = 'oCheckHasEpayPercent0';

	// Проверка статуса инвойсов
	const CHECK_INVOICES = 'oCheckInvoices';

	// Очистка невалидных записей избранного
	const CLEAR_FAVORITES = 'oClearFavorites';

	// Очистка кэша субъектов
	const CLEAR_SUBJECT_CACHE = 'oClearSubjectCache';

	// Закрытие субъекта
	const CLOSE_SUBJECT = 'oCloseSubject';

	// Комментировать событие
	const COMMENT_EVENT = 'oCommentEvent';

	// Написание комментариев к отзывам
	const COMMENT_WRITE = 'oCommentWrite';

	// Завершение регистрации
	const COMPLETE_REGISTRATION = 'oCompleteRegistration';

	// Проведение операций вывода на карту
	const COMPLETE_WITHDRAWAL = 'oCompleteWithdrawal';

	// Проведение операции перевода на банковский счет
	const CONFIRM_BANK_TRANSFER = 'oConfirmBankTransfer';

	// Подтверждение операции потомков
	const CONFIRM_CHILD_OPERATION = 'oConfirmChildOperation';

	// Подтвердить комиссию
	const CONFIRM_COMMISSION = 'oConfirmCommission';

	// Подтверждение инвойса по СМС
	const CONFIRM_INVOICE_BY_SMS = 'oConfirmInvoiceBySMS';

	// Право на подтверждение операций, оплачиваемых посредством СМС
	const CONFIRM_INVOICE_SMS = 'oConfirmInvoiceSMS';

	// Подтверждение операции
	const CONFIRM_OPERATION = 'oConfirmOperation';

	// При подтверждении операции специалист берется из операции
	const CONFIRM_OPERATION_WITH_SPECIALIST = 'oConfirmOperationWithSpecialist';

	// Подтверждение операции других пользователей
	const CONFIRM_OTHER_OPERATIONS = 'oConfirmOtherOperations';

	// Возможность корректировать данные в статистике
	const CORRECT_STATISTICS_DATA = 'oCorrectStatisticsData';

	// Создание пользователя - агента
	const CREATE_AGENT = 'oCreateAgent';

	// Создание пользователя СПП портала «Билайн»
	const CREATE_BPSUPPORT_USER = 'oCreateBPSupportUser';

	// Создание комиссии
	const CREATE_COMMISSION = 'oCreateCommission';

	// Создание скидки
	const CREATE_DISCOUNT = 'oCreateDiscount';

	// Право регистрации эмитента
	const CREATE_EMITENT = 'oCreateEmitent';

	// Создание пользователя - эмитента-администратора
	const CREATE_EMITENT_ADMIN = 'oCreateEmitentAdmin';

	// Создание акции Cashback
	const CREATE_EVENT = 'oCreateEvent';

	// Создание cashback для акции
	const CREATE_EVENT_CASHBACK = 'oCreateEventCashback';

	// Создание лимита для шлюза
	const CREATE_GATEWAY_LIMIT = 'oCreateGatewayLimit';

	// Создание синонима услуги для шлюза
	const CREATE_GATEWAY_SERVICE_SYNONYM = 'oCreateGatewayServiceSynonym';

	// Выставление счёта
	const CREATE_INVOICE = 'oCreateInvoice';

	// Право на создание операций, оплачиваемых посредством СМС
	const CREATE_INVOICE_SMS = 'oCreateInvoiceSMS';

	// Создание пользователя СПП портала «Kcell»
	const CREATE_KPSUPPORT_USER = 'oCreateKPSupportUser';

	// Создание лимита
	const CREATE_LIMIT = 'oCreateLimit';

	// Создание пользователя - мерчанта
	const CREATE_MERCHANT = 'oCreateMerchant';

	// Создать кассу QRPay
	const CREATE_MERCHANT_POINT = 'oCreateMerchantPoint';

	// Создание пользователя - модератор системы
	const CREATE_MODERATOR = 'oCreateModerator';

	// Создание пользователя - налогового инспектора
	const CREATE_NALOGOVIY_INSPECTOR = 'oCreateNalogoviyInspector';

	// Создание операций от имени пользователя
	const CREATE_OPERATION_FOR_PSEUDO_USER = 'oCreateOperationForPseudoUser';

	// Пользователь при создании операции может указать специалиста кого угодно
	const CREATE_OPERATION_WITH_SPECIALIST = 'oCreateOperationWithSpecialist';

	// Создание отчета по платежам
	const CREATE_PAYMENTS_REPORT = 'oCreatePaymentsReport';

	// Операция по созданию доверительного перевода
	const CREATE_PREPAID_CARD = 'oCreatePrepaidCard';

	// Создание пользователя СПП Resmi
	const CREATE_RESMI_SUPPORT_USER = 'oCreateResmiSupportUser';

	// Создание, регистрация школьника
	const CREATE_SCHOOLKID = 'oCreateSchoolkid';

	// Создание субагента
	const CREATE_SUB_AGENT = 'oCreateSubAgent';

	//  Создание субмерчанта
	const CREATE_SUB_MERCHANT = 'oCreateSubMerchant';

	// Создание субсубагента
	const CREATE_SUB_SUB_AGENT = 'oCreateSubSubAgent';

	// Автоматическая рассылка отчетов мерчантам
	const CRON_REPORTS = 'oCronReports';

	// Создание кастомного сервиса
	const CUSTOM_ADD_SERVICE = 'oCustomAddService';

	// Удаление кастомного сервиса
	const CUSTOM_DELETE_SERVICE = 'oCustomDeleteService';

	// Кастомизация инвойса
	const CUSTOMIZE_INVOICE = 'oCustomizeInvoice';

	// Редактирование кастомного сервиса
	const CUSTOM_MODIFY_SERVICE = 'oCustomModifyService';

	// Редактирование кастомных сервисов
	const CUSTOM_SERVICE_EDIT = 'oCustomServiceEdit';

	// Получение истории с задержкой (из материализованного представления)
	const DELAYED_HISTORY = 'oDelayedHistory';

	// Создание отложенных платежей
	const DELAYED_PAYMENT = 'oDelayedPayment';

	// Создание отложенного платежа в заказах
	const DELAYED_PAYMENT_ORDER = 'oDelayedPaymentOrder';

	// Удаление города
	const DELETE_CITY = 'oDeleteCity';

	// Удаление комиссии
	const DELETE_COMMISSION = 'oDeleteCommission';

	// Удаление страны
	const DELETE_COUNTRY = 'oDeleteCountry';

	// Удаление скидки
	const DELETE_DISCOUNT = 'oDeleteDiscount';

	// Удаление акции
	const DELETE_EVENT = 'oDeleteEvent';

	// Удалить cashback для акции
	const DELETE_EVENT_CASHBACK = 'oDeleteEventCashback';

	// Удаление часть из акции
	const DELETE_EVENT_PARTICIPANTS = 'oDeleteEventParticipants';

	// Удаление сервисов из акции
	const DELETE_EVENT_SERVICES = 'oDeleteEventServices';

	// Удаление из акции SubjectTypes
	const DELETE_EVENT_SUBJECT_TYPES = 'oDeleteEventSubjectTypes';

	// Удаление лимита для шлюза
	const DELETE_GATEWAY_LIMIT = 'oDeleteGatewayLimit';

	// Удаление лимита
	const DELETE_LIMIT = 'oDeleteLimit';

	// Удаление услуги
	const DELETE_SERVICE = 'oDeleteService';

	// Удаление группы услуг
	const DELETE_SERVICE_GROUP = 'oDeleteServiceGroup';

	// Удаление субъектов
	const DELETE_SUBJECT = 'oDeleteSubject';

	// Удаление операции, с отображением в отчётах
	const DELETE_VISIBLE_OPERATION = 'oDeleteVisibleOperation';

	// Разбиение операций превышающих лимит
	const DIVIDE_OPERATION = 'oDivideOperation';

	// Не показывать отрицательный баланс
	const DONT_SHOW_NEGATIVE_BALANCE = 'oDontShowNegativeBalance';

	// Редактирование данных агента
	const EDIT_AGENT = 'oEditAgent';

	// Редактирование списка причин отмены банковских переводов
	const EDIT_BANK_TRANSFER_CANCEL_REASONS = 'oEditBankTransferCancelReasons';

	// Редактирование корзины
	const EDIT_BASKET = 'oEditBasket';

	// Добавление, удаление и исполнения собственной мечты
	const EDIT_DREAM = 'oEditDream';

	// Редактирование события
	const EDIT_EVENT = 'oEditEvent';

	// Редактирование списка друзей
	const EDIT_FRIEND = 'oEditFriend';

	// Редактирование интересов
	const EDIT_INTERESTS = 'oEditInterests';

	// Редактирование меток
	const EDIT_LABELS = 'oEditLabels';

	// Изменение посадочной страницы, где выбирают сервис, к которому привязать промо-код
	const EDIT_LANDING_FOR_PROMO = 'oEditLandingForPromo';

	// Возможность привязки лота к определённым тэгам
	const EDIT_LOT_TAGS = 'oEditLotTags';

	// Редактирование мерчанта
	const EDIT_MERCHANT = 'oEditMerchant';

	// Редактирование кабинета мерчанта
	const EDIT_MERCHANT_CABINET = 'oEditMerchantCabinet';

	// Редактирование профиля мерчанта (собственного или родительского)
	const EDIT_MERCHANT_PROFILE = 'oEditMerchantProfile';

	// Редактирование профиля
	const EDIT_PROFILE = 'oEditProfile';

	// Изменение правил для перенаправления платежа
	const EDIT_REDIRECT_ROUTE_FOR_PAYMENT = 'oEditRedirectRouteForPayment';

	// Редактирование настроек безопасности
	const EDIT_SECURITY_SETTINGS = 'oEditSecuritySettings';

	// Изменение списка услуг, к которым можно применить промо-код
	const EDIT_SERVICES_LIST_FOR_PROMO = 'oEditServicesListForPromo';

	// Редактирование синонимов
	const EDIT_SYNONYM = 'oEditSynonym';

	// Редактирование данных системного пользователя
	const EDIT_SYSTEM_USER = 'oEditSystemUser';

	// Редактирование, создание тэгов
	const EDIT_TAGS = 'oEditTags';

	// Возможность выпуска денег и осуществления платежа
	const EMISSION_PAYMENT = 'oEmissionPayment';

	// Анкетные данные не введены
	const EMPTY_PROFILE = 'oEmptyProfile';

	// Исполнение мечты
	const EXECUTE_DREAM = 'oExecuteDream';

	// Работа с сервисами шлюзов
	const GATEWAY_SERVICES = 'oGatewayServices';

	// Генерация МТ100 для банков
	const GENERATE_MT100 = 'oGenerateMT100';

	// Генерация промо-кодов
	const GENERATE_PROMO_CODES = 'oGeneratePromoCodes';

	// Получение списка счетов мерчанта
	const GET_ACCOUNTS_MERCHANT = 'oGetAccountsMerchant';

	// Получить счет до определенной даты
	const GET_ACCOUNT_SUM_TO_DATE = 'oGetAccountSumToDate';

	// Получение списка всех карт с Oracle
	const GET_ALL_CARD_LIST = 'oGetAllCardList';

	// Получить список привязанных карт
	const GET_APPROVED_CARDS = 'oGetApprovedCards';

	// Получение статуса вывода через банкоматы
	const GET_ATM_STATUS = 'oGetAtmStatus';

	// Получение баланса из системы мерчанта
	const GET_BALANCE_IN_MERCHANT_SYSTEM = 'oGetBalanceInMerchantSystem';

	// Получать список брокерских счетов
	const GET_BROKER_ACCOUNT_LIST = 'oGetBrokerAccountList';

	// Получение списка своих карт с Oracle
	const GET_CARD_LIST = 'oGetCardList';

	// получение от эквайринга данных по операции 
	const GET_CARD_OPERATION_INFO = 'oGetCardOperationInfo';

	// Получение списка городов
	const GET_CITIES = 'oGetCities';

	// Получение списка стран
	const GET_COUNTRIES = 'oGetCountries';

	// Получение списка городов по стране
	const GET_COUNTRY_CITIES = 'oGetCountryCities';

	// Получение списка валют
	const GET_CURRENCIES = 'oGetCurrencies';

	// право на получение суммы гашений по счетам указанного юзера за указанный период
	const GET_DISCHARGE_AMOUNT = 'oGetDischargeAmount';

	// Получение части  из акции
	const GET_EVENT_PARTICIPANTS = 'oGetEventParticipants';

	// Получение сервисов акции
	const GET_EVENT_SERVICES = 'oGetEventServices';

	// Получение из акции SubjectTypes
	const GET_EVENT_SUBJECT_TYPES = 'oGetEventSubjectTypes';

	// Получить список белых IP пользователя
	const GET_IP_WHITELIST = 'oGetIpWhitelist';

	// Получить список касс QRPay
	const GET_MERCHANT_POINTS = 'oGetMerchantPoints';

	// определение оператора сотовой связи по номеру телефона
	const GET_MOBILE_OPERATOR = 'oGetMobileOperator';

	// Получение данных по операции по extid
	const GET_OPERATION_DATA_BY_EXT_ID = 'oGetOperationDataByExtId';

	// Получить идентификаторы своих сторнирующих операций
	const GET_OWN_STORNING_OPERATIONS = 'oGetOwnStorningOperations';

	// получить баланс и профильные данные родителя
	const GET_PARENT_INFO = 'oGetParentInfo';

	// Получить данные чека по идентификатору Oberthur MFS
	const GET_RECEIPT_BY_TRANSACTION_ID = 'oGetReceiptByTransactionId';

	// Получить остаток на счетах по указанному юзеру на указанную дату
	const GET_REMAINS_TO_DATE = 'oGetRemainsToDate';

	// получить количество операций возвратов для текущего субъекта
	const GET_RETURNS_COUNT = 'oGetReturnsCount';

	// Получить группы услуг
	const GET_SERVICE_GROUPS = 'oGetServiceGroups';

	// получение сводной информации по операциям, сгруппированной по сервисам
	const GET_SERVICE_OPERATIONS_COUNT = 'oGetServiceOperationsCount';

	// Получение списка услуг
	const GET_SERVICES = 'oGetServices';

	// Получение списка услуг для одной из систем
	const GET_SERVICES_BY_SYSTEM = 'oGetServicesBySystem';

	// Запрос сервисов на которые были платежи
	const GET_SERVICES_WITH_PAYMENTS = 'oGetServicesWithPayments';

	// Получить идентификаторы сторнирующих операций
	const GET_STORNING_OPERATIONS = 'oGetStorningOperations';

	// Получить родителя субъекта
	const GET_SUBJECT_PARENT = 'oGetSubjectParent';

	// получить список <братьев> субъекта, включая его самого
	const GET_SUBJECT_SIBLINGS = 'oGetSubjectSiblings';

	// Получить тип субъекта по логину
	const GET_SUBJECT_TYPE = 'oGetSubjectType';

	// Получить все типы субъектов
	const GET_SUBJECT_TYPES = 'oGetSubjectTypes';

	// Получение дополнительных данных для фильтра в отчете фин специалиста Wooppay
	const GET_SUPPORT_FILTER_DATA = 'oGetSupportFilterData';

	// Подтверждение и проведение заказов
	const GROUP_OPERATION = 'oGroupOperation';

	// Массовое проведение платежей для SmartSchool
	const GROUP_PAYMENT = 'oGroupPayment';

	// Операции, доступные только гостю
	const GUEST_OPERATIONS = 'oGuestOperations';

	// Идентифицировать неидентифицированного пользователя
	const IDENTIFY_USER = 'oIdentifyUser';

	// Пригласить на событие
	const INVITE_EVENT = 'oInviteEvent';

	// Присоединиться к событию
	const JOIN_EVENT = 'oJoinEvent';

	// Смена пароля юридического субъекта
	const JURIDICAL_SUBJECT_PASSWORD_CHANGE = 'oJuridicalSubjectPasswordChange';

	// Право создавать/редактировать юридических субъектов
	const JURIDICAL_SUBJECT_PROFILE_EDIT = 'oJuridicalSubjectProfileEdit';

	// Блокировка сотрудника СПП портала «Kcell»
	const KCELL_BLOCK_USER = 'oKcellBlockUser';

	// Создание операций с оплатой через Kcell
	const KCELL_OPERATION = 'oKCellOperation';

	// Сброс пароля сотрудника СПП портала «Kcell»
	const KCELL_PASSWORD_RESET = 'oKcellPasswordReset';

	// возврат средств на KCELL
	const KCELL_REFUND = 'oKCellRefund';

	// Отправка СМС через шлюз Kcell
	const KCELL_SMSNOTIFICATION = 'oKcellSMSNotification';

	// Разблокировка сотрудника СПП портала «Kcell»
	const KCELL_UNBLOCK_USER = 'oKcellUnblockUser';

	// Создание Посадочной страницы
	const LANDING_PAGES_ADD = 'oLandingPagesAdd';

	// Удаление Посадочных страниц
	const LANDING_PAGES_DELETE = 'oLandingPagesDelete';

	// Изменение Посадочных страниц
	const LANDING_PAGES_EDIT = 'oLandingPagesEdit';

	// Вставка js в  контент посадочных страниц
	const LANDING_PAGES_INSERT_JS = 'oLandingPagesInsertJS';

	// Список Посадочных страниц
	const LANDING_PAGES_LIST = 'oLandingPagesList';

	// Привязка субъекта к банковскому счету
	const LINK_BANK_ACCOUNT = 'oLinkBankAccount';

	// Привязка карты
	const LINK_CARD = 'oLinkCard';

	// Связать операцию с специалистом QRPay
	const LINK_OPERATION_TO_SPECIALIST_AND_MERCHANT = 'oLinkOperationToSpecialistAndMerchant';

	// Привязка промо-кода к субъекту
	const LINK_PROMO_CODE_TO_SUBJECT = 'oLinkPromoCodeToSubject';

	// Связать кассира с кассой QRPay
	const LINK_SPECIALIST_TO_POINT = 'oLinkSpecialistToPoint';

	// Просмотр списка комиссий
	const LIST_COMMISSION = 'oListCommission';

	// Список юридических субъектов
	const LIST_JURIDICAL_SUBJECT = 'oListJuridicalSubject';

	// Редактирование лотов
	const LOT_EDIT = 'oLotEdit';

	// Менеджер лотов
	const LOTS_MANAGER = 'oLotsManager';

	// Модерирование лотов (подтвердить или отправить обратно на редактирование лот)
	const LOTS_MODERATING = 'oLotsModerating';

	// Запустить парсер YML, привязать категории товаров для парсера
	const LOTS_PARSE = 'oLotsParse';

	// Не отправлять на статистику информацию о просмотрах товаров
	const LOTS_VIEW_STAT_NOT_SEND = 'oLotsViewStatNotSend';

	// Редактирование редиректов
	const MANAGE_REDIRECTIONS = 'oManageRedirections';

	// Создание/удаление точек на карте
	const MAP_MARKER_EDIT = 'oMapMarkerEdit';

	// Квитование операций гашения счетов мерчанта
	const MERCHANT_KVITAN = 'oMerchantKvitan';

	// Возврат операции
	const MERCHANT_RETURN = 'oMerchantReturn';

	// Редактирование мета тэгов
	const META_TAGS_EDIT = 'oMetaTagsEdit';

	// Возврат средств на Beeline (Oberthur) / KCell
	const MOBILE_REFUND = 'oMobileRefund';

	// Возврат средств на Beeline (Oberthur) / KCell по любой операции
	const MOBILE_REFUND_ANY = 'oMobileRefundAny';

	// Модерирование комментариев и отзывов к заведениям/лотам
	const MODERATING_COMMENT = 'oModeratingComment';

	// Редактирование города
	const MODIFY_CITY = 'oModifyCity';

	// Изменение комиссии
	const MODIFY_COMMISSION = 'oModifyCommission';

	// Редактирование страны
	const MODIFY_COUNTRY = 'oModifyCountry';

	// Изменение скидки
	const MODIFY_DISCOUNT = 'oModifyDiscount';

	// Редактировать кассу QRPay
	const MODIFY_MERCHANT_POINT = 'oModifyMerchantPoint';

	// Редактирование услуги
	const MODIFY_SERVICE = 'oModifyService';

	// Изменение группы услуг
	const MODIFY_SERVICE_GROUP = 'oModifyServiceGroup';

	// Право создавать операции гашения по агентам
	const MONEY_AGENT_REDEMPTION = 'oMoneyAgentRedemption';

	// Просмотр отчета по гашениям по всем пользователям
	const MONEY_DISCHARGE_REPORT_FOR_ANY_USER = 'oMoneyDischargeReportForAnyUser';

	// Просмотр отчета по эмиссиям по всем пользователям
	const MONEY_EMISSION_REPORT_FOR_ANY_USER = 'oMoneyEmissionReportForAnyUser';

	// Выпуск электронных денег
	const MONEY_ISSUE = 'oMoneyIssue';

	// Погашение электронных денег со счетов мерчанта
	const MONEY_MERCHANT_REDEMPTION = 'oMoneyMerchantRedemption';

	// Выпуск для эмитента-операциониста
	const MONEY_OPERATIONAL_ISSUE = 'oMoneyOperationalIssue';

	// Погашение для эмитента-операциониста
	const MONEY_OPERATIONAL_REDEMPTION = 'oMoneyOperationalRedemption';

	// Создание операции эмиссии с любого эмитента
	const MONEY_OTHER_ISSUE = 'oMoneyOtherIssue';

	// Возможность проводить чужие эмиссии
	const MONEY_PERFORM_OTHER_ISSUE = 'oMoneyPerformOtherIssue';

	// Право создавать операции гашения по субагентам
	const MONEY_SUB_AGENT_REDEMPTION = 'oMoneySubAgentRedemption';

	// Создание погашение электронных денег с системного счёта
	const MONEY_SYSTEM_REDEMPTION = 'oMoneySystemRedemption';

	// Перевод неидентифицированного пользователя в именные
	const NOMINATE_USER = 'oNominateUser';

	// Уведомление о незаполненном email в профиле
	const NOTIFY_EMPTY_EMAIL_ADDRESS = 'oNotifyEmptyEmailAddress';

	// повторное уведомление мерчанта по инвойсу
	const NOTIFY_INVOICE_MERCHANT = 'oNotifyInvoiceMerchant';

	// Уведомление по транзакциям oberthur
	const OBERTHUR_NOTIFICATION = 'oOberthurNotification';

	// Создание операций с оплатой Билайн
	const OBERTHUR_OPERATION = 'oOberthurOperation';

	// Получение статуса по транзакциям oberthur
	const OBERTHUR_STATUS = 'oOberthurStatus';

	// Возврат средств на Olimp
	const OLIMP_REFUND = 'oOlimpRefund';

	// Возврат средств на Olimp по любой операции
	const OLIMP_REFUND_ANY = 'oOlimpRefundAny';

	// Доступ к онлайн-консультанту
	const ONLINE_CONSULTANT = 'oOnlineConsultant';

	// Подтверждение пополнений с запросами к поставщику
	const OPERATION_ACQUIRING = 'oOperationAcquiring';

	// Подтверждение пополнений с привязанной карты
	const OPERATION_LINKED_CARD = 'oOperationLinkedCard';

	// Операция с родительским счетом
	const OPERATION_WITH_PARENT_ACCOUNT = 'oOperationWithParentAccount';

	// Сброс пароля для любого пользователя
	const OTHER_PASSWORD_RESET = 'oOtherPasswordReset';

	// Override From Subject
	const OVERRIDE_FROM_SUBJECT = 'oOverrideFromSubject';

	// Просмотр отчета по смене пароля по всем пользователям
	const PASSWORD_CHANGE_REPORT_FOR_ANY_USER = 'oPasswordChangeReportForAnyUser';

	// Сброс пароля
	const PASSWORD_RESET = 'oPasswordReset';

	// Отправка ссылки на email для сброса пароля любого пользователя
	const PASSWORD_RESET_ANY_USER = 'oPasswordResetAnyUser';

	// Оплата с кошелька
	const PAY_FROM_WALLET = 'oPayFromWallet';

	// Операция платежа на родительский счет
	const PAYMENT_ON_PARENT_ACCOUNT = 'oPaymentOnParentAccount';

	// Получение платежа
	const PAYMENT_RECEIVE = 'oPaymentReceive';

	// Отправка платежа
	const PAYMENT_SEND = 'oPaymentSend';

	// Проведение операции
	const PERFORM_OPERATION = 'oPerformOperation';

	// Операция по проведению доверительного перевода
	const PERFORM_PREPAID_CARD = 'oPerformPrepaidCard';

	// просмотр полного реестра операций PostExpress
	const POST_EXPRESS_FULL_REGISTER_OPERATION = 'oPostExpressFullRegisterOperation';

	// блокировка оператора  PostExpress
	const POST_EXPRESS_OPERATOR_BLOCK = 'oPostExpressOperatorBlock';

	// смена пароля оператору  PostExpress
	const POST_EXPRESS_OPERATOR_CHANGE_PASSWORD = 'oPostExpressOperatorChangePassword';

	// создание оператора PostExpress
	const POST_EXPRESS_OPERATOR_CREATE = 'oPostExpressOperatorCreate';

	// просмотр списка операторов PostExpress
	const POST_EXPRESS_OPERATOR_LIST = 'oPostExpressOperatorList';

	// создание точки PostExpress
	const POST_EXPRESS_POINT_CREATE = 'oPostExpressPointCreate';

	// изменение точки PostExpress
	const POST_EXPRESS_POINT_EDIT = 'oPostExpressPointEdit';

	// просмотр списка точек PostExpress
	const POST_EXPRESS_POINT_LIST = 'oPostExpressPointList';

	// просмотр реестра операций PostExpress по точке
	const POST_EXPRESS_POINT_REGISTER_OPERATION = 'oPostExpressPointRegisterOperation';

	// отправка кода протекции для получения денег за посылку PostExpress
	const POST_EXPRESS_PROTECTION_CODE_SEND = 'oPostExpressProtectionCodeSend';

	// работа с посылками PostExpress
	const POST_EXPRESS_WORK_WITH_PARCEL = 'oPostExpressWorkWithParcel';

	// Оплата без регистрации
	const PSEUDO_USER_OPERATIONS = 'oPseudoUserOperations';

	// Редактор RBAC
	const RBAC_EDIT = 'oRbacEdit';

	// Регистрация получателя безадресного перевода
	const REGISTER_ADDRESSLESS_TRANSFER_USER = 'oRegisterAddresslessTransferUser';

	// Регистрирование пользователей (подсчет кол-ва зарегистрированных пользователей)
	const REGISTERING = 'oRegistering';

	// Регистрация касс QRPay
	const REGISTER_POINT_OPERATOR = 'oRegisterPointOperator';

	// Регистрация пользователя
	const REGISTER_USER = 'oRegisterUser';

	// Удалять префикс из логина пользователя
	const REMOVE_PREFIX_FROM_LOGIN = 'oRemovePrefixFromLogin';

	// Отчет по возвратам (АКБ)
	const REPORT_ACBRETURN = 'oReportACBReturn';

	// Отчет по мерчанту для аккаунт менеджера
	const REPORT_ACCOUNT_MANAGER_MERCHANTS = 'oReportAccountManagerMerchants';

	// Отчет по мерчантам за определенный период для аккаунт менеджера
	const REPORT_ACCOUNT_MANAGER_PERIOD = 'oReportAccountManagerPeriod';

	// Отчет по балансу пользователей
	const REPORT_ACCOUNTS = 'oReportAccounts';

	// Акт сверки о зачислении электронных денег
	const REPORT_ACT_ED = 'oReportActED';

	// реестр возвратов для агентов, субагентов
	const REPORT_AGENT_REVERTS = 'oReportAgentReverts';

	// Просмотр списка агентов
	const REPORT_AGENTS = 'oReportAgents';

	// Отчет по платежам с эмиссией по всем эмитентам
	const REPORT_ALL_EMISSION_PAYMENTS = 'oReportAllEmissionPayments';

	// Просмотр отчёта по дням рождения
	const REPORT_BIRTHDAY = 'oReportBirthday';

	// Просмотр отчёта по заблокированным пользователям
	const REPORT_BLOCKED_USERS = 'oReportBlockedUsers';

	// Просмотр отчёта по блокировкам
	const REPORT_BLOCKING = 'oReportBlocking';

	// Отчет системы по декадам
	const REPORT_BY_DECADE = 'oReportByDecade';

	// Просмотр списка коммиссий
	const REPORT_COMMISSIONS = 'oReportCommissions';

	// Просмотр списка подтвержденных коммиссий
	const REPORT_CONFIRMED_COMMISSIONS = 'oReportConfirmedCommissions';

	// Отчёт по операциям с фильтрацией по периоду и сервису
	const REPORT_DETAILED_OPERATIONS = 'oReportDetailedOperations';

	// Просмотр отчёта по мечтателям
	const REPORT_DREAMERS = 'oReportDreamers';

	// Отчет по платежам с эмиссией
	const REPORT_EMISSION_PAYMENT = 'oReportEmissionPayment';

	// Остаток на счетах денег определённого эмитента
	const REPORT_EMITENT_REMAININGS = 'oReportEmitentRemainings';

	// Получение списка кэшбека
	const REPORT_EVENT_CASHBACK = 'oReportEventCashback';

	// Получение списка акций
	const REPORT_EVENTS = 'oReportEvents';

	// Просмотр отчёта о неудачных попытках входа
	const REPORT_FAILED_LOGINS = 'oReportFailedLogins';

	// Просмотр отчета фин специалиста
	const REPORT_FINSPEC = 'oReportFinspec';

	// Отчёт для Национального банка. Форма 10
	const REPORT_FOR_NATIONAL_BANK_FORM10 = 'oReportForNationalBankForm10';

	// Отчёт для Национального банка. Форма 15
	const REPORT_FOR_NATIONAL_BANK_FORM15 = 'oReportForNationalBankForm15';

	// Отчёт для Национального банка. Форма 7
	const REPORT_FOR_NATIONAL_BANK_FORM7 = 'oReportForNationalBankForm7';

	// Отчёт для Национального банка. Форма 8
	const REPORT_FOR_NATIONAL_BANK_FORM8 = 'oReportForNationalBankForm8';

	// Отчёт для Национального банка. Форма 9
	const REPORT_FOR_NATIONAL_BANK_FORM9 = 'oReportForNationalBankForm9';

	// Отчет по идентификациям
	const REPORT_IDENTIFICATIONS = 'oReportIdentifications';

	// Право просматривать список юридических субъектов
	const REPORT_JURIDICAL_SUBJECTS = 'oReportJuridicalSubjects';

	// Для просмотра отчётов по статистке платежей физлиц
	const REPORT_MARKETER_INFO = 'oReportMarketerInfo';

	// История платежей QRpay
	const REPORT_MERCHANT_FULL_REGISTER_OPERATION = 'oReportMerchantFullRegisterOperation';

	// Получить список касс QRPay
	const REPORT_MERCHANT_POINTS = 'oReportMerchantPoints';

	// Просмотр отчёта по мерчантам
	const REPORT_MERCHANTS = 'oReportMerchants';

	// Отчет о выпуске электронных денег
	const REPORT_MONEY_ISSUE = 'oReportMoneyIssue';

	// отчёт о движении ЭД
	const REPORT_MONEY_MOVEMENT = 'oReportMoneyMovement';

	// Отчет о погашении электронных денег
	const REPORT_MONEY_REDEMPTION = 'oReportMoneyRedemption';

	// Просмотр отчёта по форме МТ100
	const REPORT_MT100 = 'oReportMT100';

	// Просмотр отчёта за операционный день
	const REPORT_OPER_DAY = 'oReportOperDay';

	// Отчет по сбросу, смене паролей
	const REPORT_PASSWORD_RESET = 'oReportPasswordReset';

	// Получение акта сверки
	const REPORT_RECONCILIATION = 'oReportReconciliation';

	// Отчет по новым аккаунтам
	const REPORT_REGISTRATIONS = 'oReportRegistrations';

	// Реестр операций ЭД по счёту
	const REPORT_REG_OPERATION_BY_ED = 'oReportRegOperationByED';

	// Отчёт об остатках на счетах
	const REPORT_REMAINING_BALANCE = 'oReportRemainingBalance';

	// Отчет по вознаграждениям
	const REPORT_REWARD = 'oReportReward';

	// Получить отчет по пополнениям школьников
	const REPORT_SCHOOLKIDS_REFILLS = 'oReportSchoolkidsRefills';

	// Отчет по сессиям
	const REPORT_SESSIONS = 'oReportSessions';

	// Отчет по балансу пользователей школьников
	const REPORT_SMART_SCHOOL_ACCOUNTS = 'oReportSmartSchoolAccounts';

	// Просмотр отчёта по смене статусов пользователя
	const REPORT_STATUS_CHANGE = 'oReportStatusChange';

	// Доступ к запросу данных Субагента по Акту сверки о осуществлении Клиентами операций
	const REPORT_SUBAGENT_CLIENT_RECONCILIATION = 'oReportSubagentClientReconciliation';

	// Итоговый отчёт о движении ЭД по кошельку субагента/агента
	const REPORT_SUBAGENT_CONSOLIDATED = 'oReportSubagentConsolidated';

	// Доступ к запросу данных Субагента по Акту сверки о зачислении электронных денег на кошельки Субагента
	const REPORT_SUBAGENT_EMINCOME_RECONCILIATION = 'oReportSubagentEMIncomeReconciliation';

	// Доступ к запросу данных Субагента по Акту сверки о реализации ЭД
	const REPORT_SUBAGENT_EMSALE_RECONCILIATION = 'oReportSubagentEMSaleReconciliation';

	// Доступ к запросу данных Субагента по Реестру операций реализации ЭД Клиентам
	const REPORT_SUBAGENT_EMSALE_TO_CLIENT_RECONCILIATION = 'oReportSubagentEMSaleToClientReconciliation';

	// Отчет по переводам
	const REPORT_TRANSFERS = 'oReportTransfers';

	// Просмотр отчёта по смене типов пользователя
	const REPORT_TYPE_CHANGE = 'oReportTypeChange';

	// просмотр списка VIP субъектов
	const REPORT_VIP_SUBJECTS = 'oReportVipSubjects';

	// Отчет о выводах на электронную карту
	const REPORT_WITHDRAWAL = 'oReportWithdrawal';

	// сброс попыток восстановления пароля
	const RESET_PASSWORD_RECOVERY_ATTEMPTS = 'oResetPasswordRecoveryAttempts';

	// Блокировка сотрудника СПП «Resmi»
	const RESMI_BLOCK_USER = 'oResmiBlockUser';

	// Сброс пароля сотрудника СПП «Resmi»
	const RESMI_PASSWORD_RESET = 'oResmiPasswordReset';

	// Разблокировка сотрудника СПП «Resmi»
	const RESMI_UNBLOCK_USER = 'oResmiUnblockUser';

	// Написание отзывов к товарам и услугам
	const RESPONSE_WRITE = 'oResponseWrite';

	// Частичный возврат платежа
	const RETURN_PART_OF_OPERATION = 'oReturnPartOfOperation';

	// Частичный возврат платежа любого пользователя
	const RETURN_PART_OF_OPERATION_ANY_USER = 'oReturnPartOfOperationAnyUser';

	// Возврат денег по операции перевода на банковский счет
	const REVERSE_BANK_TRANSFER = 'oReverseBankTransfer';

	// Сторнирование своего перевода (платежа)
	const REVERSE_OWN_TRANSFER = 'oReverseOwnTransfer';

	// Сторнирование перевода (платежа)
	const REVERSE_TRANSFER = 'oReverseTransfer';

	// Отправка кода подтверждения операции
	const SEND_CONFIRMATION_CODE = 'oSendConfirmationCode';

	// Рассылка быстрым писем
	const SEND_DIRECT_MAIL = 'oSendDirectMail';

	// Просмотр списка промо-кодов и отправка их пользователям
	const SEND_PROMO_CODES = 'oSendPromoCodes';

	// Отправить запрос на изменение комиссии для шлюза
	const SEND_REQUEST_TO_CHANGE_GATEWAY_COMMISSION = 'oSendRequestToChangeGatewayCommission';

	// проведение операции Beeline без кода подтверждения
	const SEND_SMSPAYMENT_WITHOUT_CODE = 'oSendSMSPaymentWithoutCode';

	// Редактирование услуг
	const SERVICE_EDIT = 'oServiceEdit';

	// Редактирование услуги мерчантом
	const SERVICE_EDIT_WAITING = 'oServiceEditWaiting';

	// Изменить баннеры в сервисах
	const SERVICES_BANNER = 'oServicesBanner';

	// Право редактировать расписание гашений
	const SET_DISCHARGEMENT_SCHEDULE = 'oSetDischargementSchedule';

	// Задать список белых IP пользователя
	const SET_IP_WHITELIST = 'oSetIpWhitelist';

	// Задать список белых IP любого пользователя
	const SET_IP_WHITELIST_ANY = 'oSetIpWhitelistAny';

	// Задать список белых IP своего пользователя
	const SET_IP_WHITELIST_SELF = 'oSetIpWhitelistSelf';

	// Право подтверждать адекватность банковских реквизитов субъекта
	const SET_MT100_APPROVED = 'oSetMT100Approved';

	// oSetOperationAdditionalData
	const SET_OPERATION_ADDITIONAL_DATA = 'oSetOperationAdditionalData';

	// Перевод операции на 19 статус
	const SET_OPERATION_WAITING = 'oSetOperationWaiting';

	// Задать OTP secret пользователя
	const SET_OTP_SECRET = 'oSetOtpSecret';

	// Задать OTP secret любого пользователя
	const SET_OTP_SECRET_ANY = 'oSetOtpSecretAny';

	// Задать OTP secret своего пользователя
	const SET_OTP_SECRET_SELF = 'oSetOtpSecretSelf';

	// Задать родителя операции
	const SET_PARENT_ID = 'oSetParentId';

	// Внесение плановых финансовых показателей
	const SET_PLANNED_INDICATORS = 'oSetPlannedIndicators';

	// Назначить родителя субъекта
	const SET_SUBJECT_PARENT = 'oSetSubjectParent';

	// Создание магазина
	const SHOP_CREATE = 'oShopCreate';

	// Создание, редактирование и все что связанно с магазином
	const SHOP_EDIT = 'oShopEdit';

	// Создание, редактирование доставки для магазинов
	const SHOPS_DELIVERY = 'oShopsDelivery';

	// Подписание документов для ПШЭП
	const SIGN_DOCUMENT = 'oSignDocument';

	// Simple Transfer Send
	const SIMPLE_TRANSFER_SEND = 'oSimpleTransferSend';

	// Не обновлять количество незавершенных операций
	const SKIP_PENDING_OPERATIONS = 'oSkipPendingOperations';

	// Проведение операции через SMPP
	const SMPP_OPERATION = 'oSmppOperation';

	// Создание платежа с оплатой СМС
	const SMPP_PAYMENT = 'oSmppPayment';

	// Просмотр отчётов в статистике по привлечению
	const STATISTICS_VIEW_ATTRACTION = 'oStatisticsViewAttraction';

	// Просмотр отчётов в статистике по удержанию
	const STATISTICS_VIEW_DEDUCTION = 'oStatisticsViewDeduction';

	// Просмотр отчётов в статистике по развитию (Доставка цветов)
	const STATISTICS_VIEW_DEVELOP_FLOWERS = 'oStatisticsViewDevelopFlowers';

	// Просмотр отчётов в статистике по развитию (Оплата услуг)
	const STATISTICS_VIEW_DEVELOP_SERVICE = 'oStatisticsViewDevelopService';

	// Просмотр отчётов в статистике по развитию (для магазинов)
	const STATISTICS_VIEW_DEVELOP_SHOP = 'oStatisticsViewDevelopShop';

	// Не логировать пользователя
	const STEALTH_FOR_LOGS = 'oStealthForLogs';

	// Право квитовать гашение субагентов
	const SUB_AGENT_KVITAN = 'oSubAgentKvitan';

	// Проведение погашение электронных денег с системного счёта
	const SYSTEM_KVITAN = 'oSystemKvitan';

	// Добавление страниц
	const TEXT_PAGES_ADD = 'oTextPagesAdd';

	// Удаление страниц
	const TEXT_PAGES_DELETE = 'oTextPagesDelete';

	// Редактирование страниц
	const TEXT_PAGES_EDIT = 'oTextPagesEdit';

	// Вставка js в контент текстовых страниц
	const TEXT_PAGES_INSERT_JS = 'oTextPagesInsertJS';

	// Просмотр страниц
	const TEXT_PAGES_VIEW = 'oTextPagesView';

	// Перевод на мечту
	const TRANSFER_DREAM = 'oTransferDream';

	// Перевод на событие
	const TRANSFER_EVENT = 'oTransferEvent';

	// Проведение чужих переводов
	const TRANSFER_OTHER_PERFORM = 'oTransferOtherPerform';

	// Создание перевода между субъектами
	const TRANSFER_OTHER_SEND = 'oTransferOtherSend';

	// Получение перевода
	const TRANSFER_RECEIVE = 'oTransferReceive';

	// Список запросов на переводы
	const TRANSFER_REQUEST_LIST = 'oTransferRequestList';

	// Принять запрос на перевод
	const TRANSFER_REQUEST_RECEIVE = 'oTransferRequestReceive';

	// Послать запрос на перевод
	const TRANSFER_REQUEST_SEND = 'oTransferRequestSend';

	// Отправка перевода
	const TRANSFER_SEND = 'oTransferSend';

	// Пополнение кошелька пользователя
	const TRANSFER_SUBAGENT = 'oTransferSubagent';

	// Разблокировка IP
	const UNBLOCK_IP = 'oUnblockIP';

	// Разблокировка денежной операции
	const UNBLOCK_OPERATION = 'oUnblockOperation';

	// Разблокировка пользователя
	const UNBLOCK_USER = 'oUnblockUser';

	// Беспредельный перевод
	const UNLIMITED_TRANSFER = 'oUnlimitedTransfer';

	// Отвязать кассира от кассы QRPay
	const UNLINK_SPECIALIST_FROM_POINT = 'oUnlinkSpecialistFromPoint';

	// Изменение лимита для шлюза
	const UPDATE_GATEWAY_LIMIT = 'oUpdateGatewayLimit';

	// Редактирование услуг для шлюза
	const UPDATE_GATEWAY_SERVICES = 'oUpdateGatewayServices';

	// Расчет комиссий по родительскому субъекту
	const USE_PARENT_COMMISSIONS = 'oUseParentCommissions';

	// Создание инвойсов для родителя
	const USE_PARENT_INVOICE = 'oUseParentInvoice';

	// Доступность сервисов по родительскому субъекту
	const USE_PARENT_SERVICES = 'oUseParentServices';

	// Привязка пользователя к логину
	const USER_SET_LOGIN = 'oUserSetLogin';

	// Операция на редактирование Ussd данных
	const USSD_VIEW = 'oUssdView';

	// Просмотр страницы агрегатора счетов
	const VIEW_ACCOUNTS_AGGREGATOR = 'oViewAccountsAggregator';

	// Просмотр агентских комиссий
	const VIEW_AGENT_COMMISSIONS = 'oViewAgentCommissions';

	// Отчет по всем платежам
	const VIEW_ALL_OPERATIONS = 'oViewAllOperations';

	// Возможность просмотра всех отчётов в статистике
	const VIEW_ALL_STATISTICS_REPORTS = 'oViewAllStatisticsReports';

	// Просмотр настроек банковских сервисов
	const VIEW_BANK_SERVICES_CONFIG = 'oViewBankServicesConfig';

	// Просмотр корзины
	const VIEW_BASKET = 'oViewBasket';

	// Получить историю запросов в биллинг по операции
	const VIEW_BILLING_HISTORY = 'oViewBillingHistory';

	// Просмотр счета комиссий
	const VIEW_COMMISSION_ACCOUNT = 'oViewCommissionAccount';

	// Возможность видеть список сравнения и пользоваться им
	const VIEW_COMPARE_LIST = 'oViewCompareList';

	// Просмотр данных (о платежах, переводах и тд) необходимых для работы СПП
	const VIEW_DATA_SPP = 'oViewDataSpp';

	// Просмотр мечтателей
	const VIEW_DREAMERS = 'oViewDreamers';

	// Просмотр подробностей при ошибке
	const VIEW_ERROR_DETAILS = 'oViewErrorDetails';

	// Просмотр трэйса по ошибкам
	const VIEW_ERRORS = 'oViewErrors';

	// Просмотр события
	const VIEW_EVENT = 'oViewEvent';

	// Просмотр списка событий
	const VIEW_EVENT_LIST = 'oViewEventList';

	// Просмотр списка избранного
	const VIEW_FAVORITE_LIST = 'oViewFavoriteList';

	// Просмотр списка друзей
	const VIEW_FRIEND_LIST = 'oViewFriendList';

	// Просмотр главной страницы администратора для шлюза
	const VIEW_GATEWAY_ADMIN_MAIN_PAGE = 'oViewGatewayAdminMainPage';

	// Просмотр отчета по платежам для шлюза
	const VIEW_GATEWAY_REPORT = 'oViewGatewayReport';

	// Просмотр отчета по платежам сотрудником СПП для шлюза
	const VIEW_GATEWAY_REPORT_FOR_SUPPORT_USER = 'oViewGatewayReportForSupportUser';

	// Просмотр доступных услуг для шлюза
	const VIEW_GATEWAY_SERVICES = 'oViewGatewayServices';

	// Просмотр операций погашения кредитов
	const VIEW_LOANS_REPAYMENT_OPERATIONS = 'oViewLoansRepaymentOperations';

	// Просмотр профиля мерчанта
	const VIEW_MERCHANT_PROFILE = 'oViewMerchantProfile';

	// Просмотр сообщений в ленте
	const VIEW_MESSAGES = 'oViewMessages';

	// Просмотр сервисов и услуг на модерации
	const VIEW_MODERATING_SERVICES = 'oViewModeratingServices';

	// Просмотр операций родительского субъекта
	const VIEW_PARENT_OPERATIONS = 'oViewParentOperations';

	// Просмотр операций потомков своего родительского субъекта
	const VIEW_PARENTS_CHILDREN_OPERATIONS = 'oViewParentsChildrenOperations';

	// Просмотр профиля
	const VIEW_PROFILE = 'oViewProfile';

	// Просмотр операций-потомков в случае участия в родительской операции
	const VIEW_RELATED_OPERATIONS = 'oViewRelatedOperations';

	// Просмотр сервисов и услуг
	const VIEW_SERVICES = 'oViewServices';

	// Просмотр сервисов и услуг для агента
	const VIEW_SERVICES_FOR_AGENT = 'oViewServicesForAgent';

	// Просмотр отчётов в статистике
	const VIEW_STATISTICS_REPORTS = 'oViewStatisticsReports';

	// Просмотр количества пользователей
	const VIEW_USER_COUNT = 'oViewUserCount';

	// Возможность видеть кнопки расшаривания
	const VIEW_YA_SHARE = 'oViewYaShare';

	// добавление/удаление VIP субъектов
	const VIP_SUBJECT_LIST_MODIFY = 'oVipSubjectListModify';

	// Отмена карточной авторизации
	const WAY4_CANCEL_CARD_AUTHORIZATION = 'oWay4CancelCardAuthorization';

	// Погашение на карту
	const WAY4_DISCHARGEMENT = 'oWay4Dischargement';

	// Выпуск с карты
	const WAY4_EMISSION = 'oWay4Emission';

	// Получение списка карт с Eubank
	const WAY4_GET_CARD_LIST = 'oWay4GetCardList';

	// Получение хэша пользователя по его логину для совершения операций по Евразийскому Банку
	const WAY4_GET_HASH_BY_LOGIN = 'oWay4GetHashByLogin';

	// Привязка карты Way4
	const WAY4_LINK_CARD = 'oWay4LinkCard';

	// Удаление привязанной карты
	const WAY4_REMOVE_CARD = 'oWay4RemoveCard';

	// Запрос и проверка смс-кода при создании и подтверждении операции
	const WITHDRAWAL_OTHER = 'oWithdrawalOther';

	// Работа с данными по выводу на банковский счет
	const WITHDRAWAL_TO_BANK_ACCOUNT_DATA_WORK = 'oWithdrawalToBankAccountDataWork';

	// Отчет для фин. специалиста Wooppay
	const WOOPPAY_FINSPEC_REPORT = 'oWooppayFinspecReport';

	// Доступные услуги для субъекта
	const WORK_WITH_AVAILABLE_SERVICES_FOR_SUBJECT = 'oWorkWithAvailableServicesForSubject';

	// Работа с белым и черным списком маск карт
	const WORK_WITH_BWLIST_CARD = 'oWorkWithBWListCard';

	// отмена, подтверждение, возврат папиных операций
	const WORK_WITH_PARENT_OPERATIONS = 'oWorkWithParentOperations';

	// Изменение данных банковского счета и МТ100 по погашению
	const WORK_WITH_REDEMPTION_DETAILS = 'oWorkWithRedemptionDetails';

	// Написать сообщение
	const WRITE_MESSAGE = 'oWriteMessage';

	// Писать сообщения от имени системы, которые будут видны всем пользователям
	const WRITE_SYSTEM_MESSAGE = 'oWriteSystemMessage';

	// Возврат с Z-кошельков (псевдопользователь) на кошелек без Z
	const ZWALLET_RETURN = 'oZWalletReturn';

	// Возврат с Z-кошельков (псевдопользователь) на любой кошелек
	const ZWALLET_RETURN_TO_ANY = 'oZWalletReturnToAny';

	// Смена собственного пароля
	const T_CHANGE_OWN_PASSWORD = 'tChangeOwnPassword';

	// Просмотр логов
	const T_VIEW_LOGS = 'tViewLogs';

}