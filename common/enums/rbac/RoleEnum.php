<?php

namespace common\enums\rbac;

use yii2lab\misc\enums\BaseEnum;

/**
 * Class RoleEnum
 * 
 * Этот класс был сгенерирован автоматически.
 * Не вносите в данный файл изменения, они затрутся при очередной генерации.
 * Изменить набор констант можно через управление RBAC в админке.
 * 
 * @package common\enums\rbac
 */
class RoleEnum extends BaseEnum {

	// Администратор системы
	const ADMINISTRATOR = 'rAdministrator';

	// Налоговый инспектор
	const NAL_INSP = 'rNalInsp';

	// Пользователь
	const USER = 'rUser';

	// Неидентифицированный пользователь
	const UNKNOWN_USER = 'rUnknownUser';

	// Неидентифицированный пользователь resmi
	const RESMI_UNKNOWN_USER = 'rResmiUnknownUser';

	// Мерчант с биллингом
	const MERCHANT_BILLING = 'rMerchantBilling';

	// Мерчант
	const MERCHANT = 'rMerchant';

	// Мерчант с возможностью создания операции с оплатой СМС
	const MERCHANT_SMPP = 'rMerchantSmpp';

	// Мерчант с возможностью проведения операции с оплатой СМС без кода подтверждения
	const MERCHANT_BEELINE_DIRECT_PAYMENT = 'rMerchantBeelineDirectPayment';

	// Агент
	const AGENT = 'rAgent';

	// Агент с возможностью проведения операции без авторизации
	const AGENT_SMPP = 'rAgentSmpp';

	// Субагент (читай терминал)
	const SUB_AGENT = 'rSubAgent';

	// Эмитент
	const EMITENT = 'rEmitent';

	// Эмитент-маркетолог
	const EMITENT_MARKETOLOG = 'rEmitentMarketolog';

	// Эмитент-операционист
	const EMITENT_OPERATIONAL = 'rEmitentOperational';

	// Роль, для просмотра платежей эмитента
	const EMITENT_PAY_WATCHER = 'rEmitentPayWatcher';

	// Модератор системы
	const MODERATOR = 'rModerator';

	// Маркетолог системы
	const MARKETOLOG = 'rMarketolog';

	// Гость
	const GUEST = 'rGuest';

	// Авторизованный пользователь
	const AUTHORIZED = 'rAuthorized';

	// Пользователь, вошедший в систему
	const ALL = 'rAll';

	// Оператор службы поддержки пользователей
	const OPERATOR_SPP = 'rOperatorSPP';

	// Свежезарегистрированный пользователь
	const JUST_REGISTERED = 'rJustRegistered';

	// Контент менеджер
	const CONTENT_MANAGER = 'rContentManager';

	// Технический специалист
	const TECH_SPECIALIST = 'rTechSpecialist';

	// Разработчик мобильного приложения
	const MOBILE_DEVELOPER = 'rMobileDeveloper';

	// Оператор МТ100
	const OPERATOR_MT100 = 'rOperatorMT100';

	// Специалист финансового отдела
	const FINANCE_SPECIALIST = 'rFinanceSpecialist';

	// Финансовый специалист Wooppay
	const WPFINANCE_SPECIALIST = 'rWPFinanceSpecialist';

	// Менеджер текстовых страниц
	const TEXT_PAGES_MANAGER = 'rTextPagesManager';

	// Промоутер
	const PROMOTER = 'rPromoter';

	// Имеет доступ только рассылать отчеты мерчантам
	const CRON = 'rCron';

	// Суб-субагент
	const SUB_SUB_AGENT = 'rSubSubAgent';

	// Создание cуб-субагента
	const SUB_SUB_AGENTS_MANAGER = 'rSubSubAgentsManager';

	// работа с промо-кодами
	const PROMO_MANAGER = 'rPromoManager';

	// Сотрудник Wooppay
	const EMPLOYEE = 'rEmployee';

	// Мерчант, с правом oCreateSchoolkid
	const MERCHANT_SMART = 'rMerchantSmart';

	const TESTER = 'rTester';

	// Для прямого платежа с карты
	const PSEUDO_USER = 'rPseudoUser';

	// Специалист по погашению кредитов
	const LOANS_REPAYMENT_SPECIALIST = 'rLoansRepaymentSpecialist';

	// Пользователь без анкетных данных
	const USER_NOT_WORKSHEET = 'rUserNotWorksheet';

	// Сотрудник отдела ИБ
	const SECURITY_OFFICER = 'rSecurityOfficer';

	// Пользователь, на которого проводится безадресный перевод
	const ADDRESSLESS_TRANSFER_USER = 'rAddresslessTransferUser';

	// Пользователь по умолчанию для операций по безадресным переводам
	const TRANSFER_USER = 'rTransferUser';

	// Администратор портала «Билайн»
	const BPADMIN = 'rBPAdmin';

	// Сотрудник СПП портала «Билайн»
	const BPSUPPORT_USER = 'rBPSupportUser';

	// Администратор Resmi
	const RESMI_ADMIN = 'rResmiAdmin';

	// Администратор службы поддержи пользователей Resmi
	const RESMI_SPPADMIN = 'rResmiSPPAdmin';

	// Сотрудник СПП Resmi
	const RESMI_SUPPORT_USER = 'rResmiSupportUser';

	// Аккаунт менеджер
	const ACCOUNT_MANAGER = 'rAccountManager';

	// Администратор PostExpress
	const POST_EXPRESS_ADMIN = 'rPostExpressAdmin';

	// Оператор PostExpress
	const POST_EXPRESS_OPERATOR = 'rPostExpressOperator';

	// Роль для просмотра отчетов пост экспресса
	const VIEW_POST_EXPRESS_REPORTS = 'rViewPostExpressReports';

	// Партнёр с правом просмотра акта сверки
	const PARTNER_AUDITOR = 'rPartnerAuditor';

	// субагент с правом просматривать реестр по кошельку
	const SUBAGENT_AUDITOR = 'rSubagentAuditor';

	// оператор агента
	const AGENT_OPERATOR = 'rAgentOperator';

	// оператор мерчанта
	const MERCHANT_OPERATOR = 'rMerchantOperator';

	// Оператор субагента
	const SUB_AGENT_OPERATOR = 'rSubAgentOperator';

	// Субагент с правом доступа к своим отчетам в partnerCabinet
	const SUBAGENT_REPORTS = 'rSubagentReports';

	// Физик с правом пополняться с брокерского счёта
	const BROKER_ACCOUNT = 'rBrokerAccount';

	// Субагент с возможностью вывода денег с кошелька
	const SUB_AGENT_WITH_CASH_OUT = 'rSubAgentWithCashOut';

	// Субмерчант
	const SUB_MERCHANT = 'rSubMerchant';

	// Мерчант, который может принимать все заказы разом
	const ACCEPT_ALL_ORDERS = 'rAcceptAllOrders';

	// Пользователь с возможностью отправки СМС через шлюз Билайн
	const BEELINE_NOTIFICATION_SENDER = 'rBeelineNotificationSender';

	// Проверка мобильного оператора из биллинга
	const BILLING_CHECK_MOBILE = 'rBillingCheckMobile';

	// сотрудник СПП Олимп/1xBet для просмотра операций пополнения
	const BOOKMAKER_SPP_MERCHANT = 'rBookmakerSppMerchant';

	// сотрудник СПП Олимп/1xBet для просмотра операций вывода
	const BOOKMAKER_SPP_SUB = 'rBookmakerSppSub';

	// Расчет комиссии по родителю
	const COMMISSION_BY_PARENT = 'rCommissionByParent';

	// Роль для подтверждения комиссий на статус «Действующий»
	const COMMISSION_SPEC = 'rCommissionSpec';

	// Роль, позволяющая из операции, превышающей лимит создавать несколько операций в пределах лимита
	const DIVIDER = 'rDivider';

	// Эмитент, выпускающий деньги на один платеж
	const EMISSION_PAYER = 'rEmissionPayer';

	// Эмитент-администратор
	const EMITENT_ADMIN = 'rEmitentAdmin';

	// Пользователь для просмотра доступных сервисов, ставок по сервисам, проведенных платежей Эмитента
	const EMITENT_INFO_REPORTER = 'rEmitentInfoReporter';

	// Роль для просмотра выпуска ЭД от имени специалиста
	const EUBANK_SPECIALIST = 'rEUBankSpecialist';

	// Пользователь с правом получение данных по операции по extid
	const GET_OPERATION_DATA_BY_EXT_ID = 'rGetOperationDataByExtId';

	// Позволяет оператору СПП делать возвраты по моб. финансам и перепроводить операции в биллинге
	const GRAND_MASTER_SPP = 'rGrandMasterSPP';

	// Пользователь по умолчанию для операций по инвойсам
	const INVOICE_USER = 'rInvoiceUser';

	// Роль для регистрирования юридических субъектов
	const JUR_SUBJECT_CREATOR = 'rJurSubjectCreator';

	// Пользователь с возможностью отправки СМС через шлюз Kcell
	const KCELL_NOTIFICATION_SENDER = 'rKcellNotificationSender';

	// Администратор портала «Kcell»
	const KPADMIN = 'rKPAdmin';

	// Сотрудник СПП портала «Kcell»
	const KPSUPPORT_USER = 'rKPSupportUser';

	// Менеджер посадочных страниц
	const LANDING_PAGES_MANAGER = 'rLandingPagesManager';

	// Пользователь очереди TPS
	const LOCAL_TPS_USER = 'rLocalTpsUser';

	// Партнёр, являющийся маркетплейсом или платформой, аккумулирующей других мерчантов
	const MERCHANT_ADMIN = 'rMerchantAdmin';

	// Управляет данными по мерчанту, без удаления
	const MERCHANT_EDITOR = 'rMerchantEditor';

	// Мерчант для старой схемы работы с Kcell
	const MERCHANT_KCELL = 'rMerchantKcell';

	// Мерчант для офлайн оплаты по QR
	const MERCHANT_OFFLINE_QR = 'rMerchantOfflineQr';

	// Кассир QRPay
	const MERCHANT_POINT_OPERATOR = 'rMerchantPointOperator';

	// Оплата родителю
	const PAYMENT_TO_PARENT = 'rPaymentToParent';

	// Для прямого платежа с привязанной карты
	const PSEUDO_USER_WITH_CARDS = 'rPseudoUserWithCards';

	// Пользователь resmi, на которого проводится безадресный перевод
	const RESMI_ADDRESSLESS_TRANSFER_USER = 'rResmiAddresslessTransferUser';

	// Кабинет маркетолога для ресми
	const RESMI_MARKETOLOG = 'rResmiMarketolog';

	// Пользователь resmi для прямого платежа с карты
	const RESMI_PSEUDO_USER = 'rResmiPseudoUser';

	// Пользователь Resmi
	const RESMI_USER = 'rResmiUser';

	// Школоло
	const SCHOOLKID = 'rSchoolkid';

	// Доступность сервиса по родителю
	const SERVICE_BY_PARENT = 'rServiceByParent';

	// Пользователь для проверки доступности сервисов
	const SERVICE_CHECKER = 'rServiceChecker';

	// Не логировать пользователя
	const SKIP_LOGS = 'rSkipLogs';

	// Модератор статистики
	const STATISTICS_MODERATOR = 'rStatisticsModerator';

	// Субагент для привязанных карт
	const SUB_AGENT_FOR_LINKED_CARD = 'rSubAgentForLinkedCard';

	// Субагент для оплаты услуг от имени пользователей
	const SUB_AGENT_FOR_PSEUDO_USER = 'rSubAgentForPseudoUser';

	// Субагент с правом перевода неидентифицированных пользователей в именные
	const SUBAGENT_NOMINATOR = 'rSubagentNominator';

	// Субагент, пользующийся агентским счетом
	const SUB_AGENT_POST_PAID = 'rSubAgentPostPaid';

	// Субагент с эквайрингом
	const SUB_AGENT_WITH_ACQUIRING = 'rSubAgentWithAcquiring';

	// Роль для закрытия юр. субъектов
	const SUBJECT_CLOSER = 'rSubjectCloser';

	// Роль администратора Ussd
	const USSD_ADMIN = 'rUssdAdmin';

	// Пользователь делающий возвраты по отмененным выводам
	const WITHDRAWAL_REFUNDER = 'rWithdrawalRefunder';

}