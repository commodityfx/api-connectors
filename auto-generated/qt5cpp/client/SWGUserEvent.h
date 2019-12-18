/**
 * BitMEX API
 * ## REST API for the BitMEX Trading Platform  [View Changelog](/app/apiChangelog)  -  #### Getting Started  Base URI: [https://www.bitmex.com/api/v1](/api/v1)  ##### Fetching Data  All REST endpoints are documented below. You can try out any query right from this interface.  Most table queries accept `count`, `start`, and `reverse` params. Set `reverse=true` to get rows newest-first.  Additional documentation regarding filters, timestamps, and authentication is available in [the main API documentation](/app/restAPI).  _All_ table data is available via the [Websocket](/app/wsAPI). We highly recommend using the socket if you want to have the quickest possible data without being subject to ratelimits.  ##### Return Types  By default, all data is returned as JSON. Send `?_format=csv` to get CSV data or `?_format=xml` to get XML data.  ##### Trade Data Queries  _This is only a small subset of what is available, to get you started._  Fill in the parameters and click the `Try it out!` button to try any of these queries.  - [Pricing Data](#!/Quote/Quote_get)  - [Trade Data](#!/Trade/Trade_get)  - [OrderBook Data](#!/OrderBook/OrderBook_getL2)  - [Settlement Data](#!/Settlement/Settlement_get)  - [Exchange Statistics](#!/Stats/Stats_history)  Every function of the BitMEX.com platform is exposed here and documented. Many more functions are available.  ##### Swagger Specification  [⇩ Download Swagger JSON](swagger.json)  -  ## All API Endpoints  Click to expand a section. 
 *
 * OpenAPI spec version: 1.2.0
 * Contact: support@bitmex.com
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen.git
 * Do not edit the class manually.
 */

/*
 * SWGUserEvent.h
 *
 * User Events for auditing
 */

#ifndef SWGUserEvent_H_
#define SWGUserEvent_H_

#include <QJsonObject>


#include "SWGObject.h"
#include <QDateTime>
#include <QString>

#include "SWGObject.h"

namespace Swagger {

class SWGUserEvent: public SWGObject {
public:
    SWGUserEvent();
    SWGUserEvent(QString json);
    ~SWGUserEvent();
    void init();
    void cleanup();

    QString asJson () override;
    QJsonObject asJsonObject() override;
    void fromJsonObject(QJsonObject json) override;
    SWGUserEvent* fromJson(QString jsonString) override;

    double getId();
    void setId(double id);

    QString* getType();
    void setType(QString* type);

    QString* getStatus();
    void setStatus(QString* status);

    double getUserId();
    void setUserId(double user_id);

    double getCreatedById();
    void setCreatedById(double created_by_id);

    QString* getIp();
    void setIp(QString* ip);

    QString* getGeoipCountry();
    void setGeoipCountry(QString* geoip_country);

    QString* getGeoipRegion();
    void setGeoipRegion(QString* geoip_region);

    QString* getGeoipSubRegion();
    void setGeoipSubRegion(QString* geoip_sub_region);

    SWGObject* getEventMeta();
    void setEventMeta(SWGObject* event_meta);

    QDateTime* getCreated();
    void setCreated(QDateTime* created);


    virtual bool isSet() override;

private:
    double id;
    bool m_id_isSet;

    QString* type;
    bool m_type_isSet;

    QString* status;
    bool m_status_isSet;

    double user_id;
    bool m_user_id_isSet;

    double created_by_id;
    bool m_created_by_id_isSet;

    QString* ip;
    bool m_ip_isSet;

    QString* geoip_country;
    bool m_geoip_country_isSet;

    QString* geoip_region;
    bool m_geoip_region_isSet;

    QString* geoip_sub_region;
    bool m_geoip_sub_region_isSet;

    SWGObject* event_meta;
    bool m_event_meta_isSet;

    QDateTime* created;
    bool m_created_isSet;

};

}

#endif /* SWGUserEvent_H_ */