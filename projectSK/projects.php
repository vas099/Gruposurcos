<?php require 'tpl/header.php'?>
            <div class="dd1Services">
                <div id="cotainerImgCat"></div>
                <div id="catalogCat">
                    <div class="catalogTextCat">
                        <div class="catalogTextHCat">Найдите свой дом в Испании</div>
                    </div>
                    <div class="catalogFormCat">
                        <form id="catalogFormsContainerCat" action="" method="post" name="catalogF">
                            <div class="catalogTotalCat">
                                <div class="catalogNameCat">
                                    <div class="catalogNameNameCat">
                                        <div class="nameOptionCat">
                                            <div class="optionImgCat"><img src="images/selectOpen.png" width="20" height="20"></div>
                                            <select class="optionSelectCat" id="list" name="selectCity" data-group="property" data-index="0">
                                                <option value="" selected >Выбирите город</option>
                                                <optgroup label="Город">
                                                    <option value="Аликанте">Аликанте</option>
                                                    <option value="Алтея">Алтея</option>
                                                    <option value="Альбатера ">Альбатера </option>
                                                    <option value="Альтет">Альтет</option>
                                                    <option value="Бенидорм">Бенидорм</option>
                                                    <option value="Бениса">Бениса</option>
                                                    <option value="Бенихофар">Бенихофар</option>
                                                    <option value="Валенсия">Валенсия</option>
                                                    <option value="Гандия">Гандия</option>
                                                    <option value="Гуардамар">Гуардамар</option>
                                                    <option value="Дениа">Дениа</option>
                                                    <option value="Кальпе">Кальпе</option>
                                                    <option value="Кампейо">Кампейо</option>
                                                    <option value="Кревьенте">Кревьенте</option>
                                                    <option value="Ла Манга">Ла Манга</option>
                                                    <option value="Ла Марина">Ла Марина</option>
                                                    <option value="Ла Мата (Торревьеха)">Ла Мата (Торревьеха)</option>
                                                    <option value="Лос Монтесинос">Лос Монтесинос</option>
                                                    <option value="Молинс">Молинс</option>
                                                    <option value="Морайра">Морайра</option>
                                                    <option value="Мурсия">Мурсия</option>
                                                    <option value="Мучамьель">Мучамьель</option>
                                                    <option value="Ондон де лос Фраилес ">Ондон де лос Фраилес </option>
                                                    <option value="Ориуэла">Ориуэла</option>
                                                    <option value="Ориуэла Коста">Ориуэла Коста</option>
                                                    <option value="Ориуэлла Коста">Ориуэлла Коста</option>
                                                    <option value="Пилар де ла Орадада">Пилар де ла Орадада</option>
                                                    <option value="Полоп де ла Марина">Полоп де ла Марина</option>
                                                    <option value="Рохалес">Рохалес</option>
                                                    <option value="Сан Висенте дель Распейг">Сан Висенте дель Распейг</option>
                                                    <option value="Сан Мигель де Салинас">Сан Мигель де Салинас</option>
                                                    <option value="Сан Хуан де Аликанте">Сан Хуан де Аликанте</option>
                                                    <option value="Сан Хуан Пляж">Сан Хуан Пляж</option>
                                                    <option value="Санта Пола">Санта Пола</option>
                                                    <option value="Сьюдад Кесада">Сьюдад Кесада</option>
                                                    <option value="Торре де ла Орадада">Торре де ла Орадада</option>
                                                    <option value="Торревьеха">Торревьеха</option>
                                                    <option value="Хавеа">Хавеа</option>
                                                    <option value="Эль Кампейо">Эль Кампейо</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                        <div class="nameOptionCat">
                                            <div class="optionImgCat imgCat2"><img src="images/selectOpen.png" width="20" height="20"></div>
                                            <select class="optionSelectCat" id="typeAppart" name="selectCity" data-group="property" data-index="0">
                                                <option value="" selected>Выберите тип объекта</option>
                                                <optgroup label="Тип недвижимости">
                                                    <option value="2"> Квартира</option>
                                                    <option value="3"> Бунгало</option>
                                                    <option value="13"> Дуплекс</option>
                                                    <option value="11"> Отдельностоящий дом</option>
                                                    <option value="5"> Вилла</option>
                                                    <option value="6"> Коммерческое помещение</option>
                                                    <option value="8"> Участок</option>
                                                    <option value="4"> Квартира на последнем этаже</option>
                                                    <option value="9"> Земельное угодье</option>
                                                    <option value="10"> Инвестиционный проект</option>
                                                    <option value="14"> Новостройка</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                        <div class="nameOptionCat">
                                            <div class="optionImgCat imgCat3"><img src="images/selectOpen.png" width="20" height="20"></div>
                                            <select class="optionSelectCat" id="" name="selectCity" data-group="property" data-index="0">
                                                <option value="" selected> Выбирите тип сделки</option>
                                                <optgroup label="Тип сделки">
                                                    <option value="1">Продажа</option>
                                                    <option value="2">Аренда</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                        <div class="informOptionCat">
                                            <div class="optionImgCat imgCat4"><img src="images/selectSearch.png" width="25" height="25"></div>
                                            <div class="nameOptionCat regButCat">
                                                <button type="submit" class="registrationOptionButtonCat" form="catalogFormsContainer" href="">ПОИСК</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="servContainer">
                    <span class="smallPage">Показано 1 - 3 из 274</span>
                    <div class="cotainerText">
                        <div class="catalogObject two" id="ip-listing-100947">
                            <div class="object">
                                <div class="objectImg">
                                    <div class="objectImgThumb">
                                        <a href="/index.php/propiedades/property/100947-studiya-v-tsentre-torrevekhi-torrevekha">
                                            <img src="images/catalog/DSC003525ab3e96a13806_thumb.jpg" alt="Студия в Центре Торревьехи" class="imgThumb" />
                                        </a>
                                    </div>
                                    <h4 class="price">37.000 €</h4>
                                </div> 
                                <div class="objectText">
                                    <div class="objectTextInfo">
                                        <a href="/index.php/propiedades/property/100947-studiya-v-tsentre-torrevekhi-torrevekha" class="infoA">Ti0002 - Студия в Центре Торревьехи</a>
                                         - Торревьеха, Аликанте Spain<br /><strong>Ванные комнаты:</strong> 1 &#160;&#160;<strong>м<sup>2</sup>:</strong> 23 &#160;&#160;<strong>Регион:</strong> Аликанте &#160;&#160;
                                     </div>
                                    <div class="infoFooter">Numérico: 1100 Квартира расположена на первом этажев центре Торревьехи. Ориентированна на Восток. Состоит из 1 (...)
                                    </div>
                                    <div class="small">SK inmobiliaria </div>
                                    <div class="catalogConteinerObjekt">
                                        <a href="/index.php/propiedades/cat/2-" class="infoA">Квартира</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>


                        <div class="catalogObject" id="ip-listing-100948">
                            <div class="object">
                                <div class="objectImg">
                                    <div class="objectImgThumb">                
                                        <a href="/index.php/propiedades/property/100948-studiya-na-nizhnem-etazhe-v-torrevekhe-torrevekha"><img src="images/catalog/DSC003465ab3f0f4ca0ae_thumb.jpg" alt="Студия на Нижнем Этаже в Торревьехе" class="imgThumb" /></a>                
                                    </div>
                                    <h4 class="price">39.000 €</h4>
                                </div> 
                                <div class="objectText">
                                    <div class="objectTextInfo">
                                        <a href="/index.php/propiedades/property/100948-studiya-na-nizhnem-etazhe-v-torrevekhe-torrevekha" class="infoA">Ti0003 - Студия на Нижнем Этаже в Торревьехе</a>
                                         - Торревьеха, Аликанте Spain<br /><strong>Ванные комнаты:</strong> 1 &#160;&#160;<strong>м<sup>2</sup>:</strong> 23 &#160;&#160;<strong>Регион:</strong> Аликанте &#160;&#160;
                                    </div>
                                    <div class="infoFooter">Numérico: 1100 Квартира-студия расположена на нижнем этаже в Торревьехе. Ориентирована на Восток. Состоит из 1 (...)
                                    </div>
                                    <div class="small">SK inmobiliaria </div>
                                    <div class="catalogConteinerObjekt">
                                        <a href="/index.php/propiedades/cat/2-" class="infoA">Квартира</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>


                        <div class="catalogObject two" id="ip-listing-100950">
                            <div class="object">
                                <div class="objectImg">
                                    <div class="objectImgThumb">                
                                        <a href="/index.php/propiedades/property/100950-prostornaya-studiya-v-rajone-acequion-torrevekha-torrevekha"><img src="images/catalog/DSC003755ab53f719e644_thumb.jpg" alt="Просторная Студия в Районе Acequion, Торревьеха" class="imgThumb" /></a>
                                    </div>
                                    <h4 class="price">47.500 €</h4>
                                </div> 
                                <div class="objectText">
                                    <div class="objectTextInfo">
                                        <a href="/index.php/propiedades/property/100950-prostornaya-studiya-v-rajone-acequion-torrevekha-torrevekha" class="infoA">Ti0004 - Просторная Студия в Районе Acequion, Торревьеха</a>
                                         - Торревьеха, Аликанте Spain<br /><strong>Ванные комнаты:</strong> 1 &#160;&#160;<strong>м<sup>2</sup>:</strong> 34 &#160;&#160;<strong>Этаж:</strong> 3 &#160;&#160;<strong>Регион:</strong> Аликанте &#160;&#160;
                                     </div>
                                    <div class="infoFooter">Numérico: 1120 Просторная квартира-студия находится в районе Acequion в Торревьехе. Ориентирована на Восток. Жильё (...)
                                    </div>
                                    <div class="small">SK inmobiliaria </div>
                                    <div class="catalogConteinerObjekt">
                                        <a href="/index.php/propiedades/cat/2-" class="infoA">Квартира</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>


                        <div class="catalogObject" id="ip-listing-101014">
                            <div class="object">
                                <div class="objectImg">
                                    <div class="objectImgThumb">                
                                        <a href="/index.php/propiedades/property/101014-prostornaya-kvartiira-v-700-metrakh-ot-plyazha-kura-torrevekha-torrevekha"><img src="images/catalog/DSC013365b2298f3dabee_thumb.jpg" alt="Просторная Квартиира в 700 метрах от Пляжа Кура, Торревьеха" class="imgThumb" /></a>                
                                    </div>
                                    <h4 class="price">49.000 €</h4>
                                </div> 
                                <div class="objectText">
                                    <div class="objectTextInfo">
                                        <a href="/index.php/propiedades/property/101014-prostornaya-kvartiira-v-700-metrakh-ot-plyazha-kura-torrevekha-torrevekha" class="infoA">Ti1001 - Просторная Квартиира в 700 метрах от Пляжа Кура, Торревьеха</a>
                                         - Торревьеха, Аликанте Spain<br /><strong>Спальни:</strong> 1 &#160;&#160;<strong>Ванные комнаты:</strong> 1 &#160;&#160;<strong>м<sup>2</sup>:</strong> 58 &#160;&#160;<strong>Этаж:</strong> 2 &#160;&#160;<strong>Регион:</strong> Аликанте &#160;&#160; 
                                    </div>
                                    <div class="infoFooter">Numérico: 1100 Просторная квартира площадью в 58м² расположена на 2м (последнем) этаже и находится в Торревьехе (...)</div><div class="small">SK inmobiliaria </div><div class="catalogConteinerObjekt"><a href="/index.php/propiedades/cat/2-" class="infoA">Квартира</a>
                                    </div>        
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>


                        <div class="catalogObject" id="ip-listing-100851">
                            <div class="object">
                                <div class="objectImg">
                                    <div class="objectImgThumb">                
                                        <a href="/index.php/propiedades/property/100851-studiya-vblizi-plyazha-s-vidom-na-bassejn-la-mata-torrevekha"><img src="images/catalog/IMG_296458f75de75d0b1_thumb.jpg" alt=" Студия Вблизи Пляжа с Видом на Бассейн" class="imgThumb" /></a>
                                    </div>
                                    <h4 class="price">56.000 €</h4>
                                </div> 
                                <div class="objectText">
                                    <div class="objectTextInfo">
                                        <a href="/index.php/propiedades/property/100851-studiya-vblizi-plyazha-s-vidom-na-bassejn-la-mata-torrevekha" class="infoA">Ti0301 -  Студия Вблизи Пляжа с Видом на Бассейн</a>
                                         - Ла Мата (Торревьеха), Аликанте Spain<br /><strong>Ванные комнаты:</strong> 1 &#160;&#160;<strong>м<sup>2</sup>:</strong> 24 &#160;&#160;<strong>Этаж:</strong> Этаж: 1 &#160;&#160;<strong>Регион:</strong> Аликанте &#160;&#160;            
                                    </div>
                                    <div class="infoFooter"> Numérico: 1095 Студия расположена вблизи пляжа в Резиденции Виньямар III с потрясающим видом на бассейн. (...)</div>
                                    <div class="small">SK inmobiliaria </div>
                                    <div class="catalogConteinerObjekt">
                                        <a href="/index.php/propiedades/cat/2-" class="infoA">Квартира</a>
                                    </div>        
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>


                        <div class="catalogObject two" id="ip-listing-101063">
                            <div class="object">
                                <div class="objectImg">
                                    <div class="objectImgThumb">                
                                        <a href="/index.php/propiedades/property/101063-kvartira-v-ondon-de-los-frailes-hondon-de-los-frailes-alikante-ondon-de-los-frailes"><img src="images/catalog/fachada5b8faaa7124db_thumb.jpg" alt="Квартира в Ондон де лос Фраилес (Hondon de los Frailes), Аликанте" class="imgThumb" /></a>                
                                    </div>
                                    <h4 class="price">58.000 €</h4>
                                </div> 
                                <div class="objectText">
                                    <div class="objectTextInfo">
                                        <a href="/index.php/propiedades/property/101063-kvartira-v-ondon-de-los-frailes-hondon-de-los-frailes-alikante-ondon-de-los-frailes" class="infoA">Ti2358 - Квартира в Ондон де лос Фраилес (Hondon de los Frailes), Аликанте</a>
                                         - Ондон де лос Фраилес , Аликанте Spain<br /><strong>Спальни:</strong> 2 &#160;&#160;<strong>Ванные комнаты:</strong> 1 &#160;&#160;<strong>м<sup>2</sup>:</strong> 66 &#160;&#160;<strong>Этаж:</strong> Этаж: 1 &#160;&#160;<strong>Регион:</strong> Аликанте &#160;&#160;         
                                    </div>
                                    <div class="infoFooter">Numérico: 1100 Квартира находится на первом этаже в Ондон де лос Фраилес (Hondon de los Frailes), Аликанте. Ориентирована на (...)</div>
                                    <div class="small">SK inmobiliaria </div>
                                    <div class="catalogConteinerObjekt">
                                        <a href="/index.php/propiedades/cat/2-" class="infoA">Квартира</a>
                                    </div>        
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>


                        <div class="catalogObject two" id="ip-listing-100973">
                            <div class="object">
                                <div class="objectImg">
                                    <div class="objectImgThumb">
                                        <a href="/index.php/propiedades/property/100973-kvartira-vblizi-parka-de-las-nasones-parque-de-las-naciones-torrevekha-torrevekha"><img src="images/catalog/DSC009655af000859aa2c_thumb.jpg" alt="Квартира Вблизи Парка Де Лас Насьонес (Parque de las Naciones), Торревьеха" class="imgThumb" /></a>
                                    </div>
                                    <h4 class="price">63.000 €</h4>
                                </div> 
                                <div class="objectText">
                                    <div class="objectTextInfo">
                                        <a href="/index.php/propiedades/property/100973-kvartira-vblizi-parka-de-las-nasones-parque-de-las-naciones-torrevekha-torrevekha" class="infoA">Ti2339 - Квартира Вблизи Парка Де Лас Насьонес (Parque de las Naciones), Торревьеха</a>
                                         - Торревьеха, Аликанте Spain<br /><strong>Спальни:</strong> 2 &#160;&#160;<strong>Ванные комнаты:</strong> 1 &#160;&#160;<strong>м<sup>2</sup>:</strong> 50 &#160;&#160;<strong>Этаж:</strong> Этаж: 3 &#160;&#160;<strong>Регион:</strong> Аликанте &#160;&#160;            
                                    </div>
                                    <div class="infoFooter">Numérico: 1100 Квартира находится на 3м этаже и расположена вблизи парка Де Лас Насьонес (Parque de las Naciones), Торревьеха. (...)</div>
                                    <div class="small">SK inmobiliaria </div>
                                    <div class="catalogConteinerObjekt">
                                        <a href="/index.php/propiedades/cat/2-" class="infoA">Квартира</a>
                                    </div>        
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>


                        <div class="catalogObject" id="ip-listing-100837">
                            <div class="object">
                                <div class="objectImg">
                                    <div class="objectImgThumb">                
                                        <a href="/index.php/propiedades/property/100837-zdanie-s-kvartirami-novostrojka-v-torrevekhe-torrevekha">
                                            <img src="images/catalog/358ac1f45e8c92_thumb.jpg" alt="Здание с Квартирами, Новостройка в Торревьехе" class="imgThumb" /></a>                
                                    </div>
                                    <h4 class="price">64.900 €</h4>
                                </div> 
                                <div class="objectText">
                                    <div class="objectTextInfo">
                                        <a href="/index.php/propiedades/property/100837-zdanie-s-kvartirami-novostrojka-v-torrevekhe-torrevekha" style="color: #af0a00;" class="infoA">Ti2015 - Здание с Квартирами, Новостройка в Торревьехе</a>
                                         - Торревьеха, Аликанте Spain<br /><strong>Спальни:</strong> 1 &#160;&#160;<strong>Ванные комнаты:</strong> 1 &#160;&#160;<strong>Этаж:</strong> 5 &#160;&#160;<strong>Регион:</strong> Аликанте &#160;&#160;            
                                    </div>
                                    <div class="infoFooter"> Numérico: 1095 Здание расположено в центре Торревьехи, всего в 600 метрах от песчанного пляжа. Потрясающая (...)</div>
                                    <div class="small">SK inmobiliaria </div>
                                    <div class="catalogConteinerObjekt"><a href="/index.php/propiedades/cat/2-" class="infoA">Квартира</a>
                                    </div>        
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>


                        <div class="catalogObject" id="ip-listing-100898">
                            <div class="object">
                                <div class="objectImg">
                                    <div class="objectImgThumb">                
                                        <a href="/index.php/propiedades/property/100898-kvartira-v-tsentre-torrevkhi-torrevekha"><img src="images/catalog/foto15a74966238f07_thumb.jpg" alt="Квартира в Центре Торревьхи" class="imgThumb" /></a>                
                                    </div>
                                    <h4 class="price">69.500 €</h4>
                                </div> 
                                <div class="objectText">
                                    <div class="objectTextInfo">
                                        <a href="/index.php/propiedades/property/100898-kvartira-v-tsentre-torrevkhi-torrevekha" class="infoA">Ti2313 - Квартира в Центре Торревьхи</a>
                                         - Торревьеха, Аликанте Spain<br /><strong>Спальни:</strong> 2 &#160;&#160;<strong>Ванные комнаты:</strong> 1 &#160;&#160;<strong>м<sup>2</sup>:</strong> 60 &#160;&#160;<strong>Этаж:</strong> Этаж: 3 &#160;&#160;<strong>Регион:</strong> Аликанте &#160;&#160;            
                                    </div>
                                    <div class="infoFooter">Numérico: 1095 Квартира площадью в 60м² расположена на 3м этаже и расположена в центре Торревьехи. Жилье состоит из (...)</div>
                                    <div class="small">SK inmobiliaria </div>
                                    <div class="catalogConteinerObjekt">
                                        <a href="/index.php/propiedades/cat/2-" class="infoA">Квартира</a>
                                    </div>        
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>


                        <div class="catalogObject two" id="ip-listing-100607">
                            <div class="object">
                                <div class="objectImg">
                                    <div class="objectImgThumb">                
                                        <a href="/index.php/propiedades/property/100607-prevoskhodnaya-kvartira-v-50-metrakh-ot-prekrasnogo-plyazha-la-maty-la-mata"><img src="images/catalog/o_1celhtver1vbr1qq81lck9qct4265b618dec4cd52_thumb.jpg" alt="Превосходная Квартира в 50 метрaх от прекрасного пляжа Ла Маты" class="imgThumb" /></a>                
                                    </div>
                                    <h4 class="price">69.900 €</h4>
                                </div> 
                                <div class="objectText">
                                    <div class="objectTextInfo">
                                        <a href="/index.php/propiedades/property/100607-prevoskhodnaya-kvartira-v-50-metrakh-ot-prekrasnogo-plyazha-la-maty-la-mata" class="infoA">Ti2282 - Превосходная Квартира в 50 метрaх от прекрасного пляжа Ла Маты</a>
                                         - Ла Мата (Торревьеха), Аликанте Spain<br /><strong>Спальни:</strong> 2 &#160;&#160;<strong>Ванные комнаты:</strong> 1 &#160;&#160;<strong>м<sup>2</sup>:</strong> 51 &#160;&#160;<strong>Этаж:</strong> Этаж: 1 &#160;&#160;<strong>Регион:</strong> Аликанте &#160;&#160;           
                                    </div>
                                    <div class="infoFooter"> Numérico: 1095 Квартира расположена на первом этаже, расположение Западное. Всего в 50 метрах находится (...)</div>
                                    <div class="small">SK inmobiliaria </div>
                                    <div class="catalogConteinerObjekt">
                                        <a href="/index.php/propiedades/cat/2-" class="infoA">Квартира</a>
                                    </div>       
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>


                        <div class="catalogObject" id="ip-listing-100978">
                            <div class="object">
                                <div class="objectImg">
                                    <div class="objectImgThumb">                
                                        <a href="/index.php/propiedades/property/100978-kvartira-v-700-metrakh-ot-plyazha-kura-tsentr-torrevekha-torrevekha"><img src="images/catalog/DSC008705af321c186b1d_thumb.jpg" alt="Квартира в 700 метрах от Пляжа Кура, Центр Торревьеха " class="imgThumb" /></a>                
                                    </div>
                                    <h4 class="price">69.900 €</h4>
                                </div> 
                                <div class="objectText">
                                    <div class="objectTextInfo">
                                        <a href="/index.php/propiedades/property/100978-kvartira-v-700-metrakh-ot-plyazha-kura-tsentr-torrevekha-torrevekha" class="infoA">Ti2338 - Квартира в 700 метрах от Пляжа Кура, Центр Торревьеха </a>
                                         - Торревьеха, Аликанте Spain<br /><strong>Спальни:</strong> 2 &#160;&#160;<strong>Ванные комнаты:</strong> 1 &#160;&#160;<strong>м<sup>2</sup>:</strong> 68 &#160;&#160;<strong>Этаж:</strong> Этаж: 4 &#160;&#160;<strong>Регион:</strong> Аликанте &#160;&#160;            
                                    </div>
                                    <div class="infoFooter">Numérico: 1100 Квартира находится на 4м этаже, всего в 700 метрах от пляжа Кура и расположена в центре Торревьехи. (...)</div>
                                    <div class="small">SK inmobiliaria </div>
                                    <div class="catalogConteinerObjekt">
                                        <a href="/index.php/propiedades/cat/2-" class="infoA">Квартира</a>
                                    </div>        
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>


                        <div class="catalogObject two" id="ip-listing-100466">
                            <div class="object">
                                <div class="objectImg">
                                    <div class="objectImgThumb">                
                                        <a href="/index.php/propiedades/property/100466-fantasticheskaya-kvartira-na-1-om-etazhe-v-tsentre-torrevekhi-torrevieja-torrevekha"><img src="images/catalog/Fotos_Ti2238_para_WEB_5_56b4daf2b5f0c_thumb.jpg" alt="Квартира на 1-ом Этаже в Центре Торревьехи (Torrevieja) " class="imgThumb" /></a>                
                                    </div>
                                    <h4 class="price">71.000 €</h4>
                                </div> 
                                <div class="objectText">
                                    <div class="objectTextInfo">
                                        <a href="/index.php/propiedades/property/100466-fantasticheskaya-kvartira-na-1-om-etazhe-v-tsentre-torrevekhi-torrevieja-torrevekha" class="infoA">Ti2238 - Квартира на 1-ом Этаже в Центре Торревьехи (Torrevieja) </a>
                                         - Торревьеха, Аликанте Spain<br /><strong>Спальни:</strong> 2 &#160;&#160;<strong>Ванные комнаты:</strong> 1 &#160;&#160;<strong>м<sup>2</sup>:</strong> 60 &#160;&#160;<strong>Регион:</strong> Аликанте &#160;&#160;          
                                    </div>
                                    <div class="infoFooter">  Numérico: 1095 Состоит из 2 спален, 1 ванной комнаты, гостиной/столовой и американской кухни. Также с гостиной (...)</div>
                                    <div class="small">SK inmobiliaria </div>
                                    <div class="catalogConteinerObjekt">
                                        <a href="/index.php/propiedades/cat/2-" class="infoA">Квартира</a>
                                    </div>        
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>


                        <div class="catalogObject" id="ip-listing-101036">
                            <div class="object">
                                <div class="objectImg">
                                    <div class="objectImgThumb">                
                                        <a href="/index.php/propiedades/property/101036-kvartira-v-tsentre-torrevekhi-s-bassejnom-urbanizatsii-torrevekha"><img src="images/catalog/DSC013875b431238d1431_thumb.jpg" alt="Квартира в Центре Торревьехи с Бассейном Урбанизации" class="imgThumb" /></a>                
                                    </div>
                                    <h4 class="price">71.500 €</h4>
                                </div> 
                                <div class="objectText">
                                    <div class="objectTextInfo">
                                        <a href="/index.php/propiedades/property/101036-kvartira-v-tsentre-torrevekhi-s-bassejnom-urbanizatsii-torrevekha" class="infoA">Ti3331 - Квартира в Центре Торревьехи с Бассейном Урбанизации</a>
                                         - Торревьеха, Аликанте Spain<br /><strong>Спальни:</strong> 3 &#160;&#160;<strong>Ванные комнаты:</strong> 2 &#160;&#160;<strong>м<sup>2</sup>:</strong> 75 &#160;&#160;<strong>Этаж:</strong> 3 &#160;&#160;<strong>Регион:</strong> Аликанте &#160;&#160;            
                                    </div>
                                    <div class="infoFooter">Numérico: 1100 Квартира расположена на 3м этаже и находится в центре Торревьехи. Жилье площадью в 75м² состоит из 3х (...)</div>
                                    <div class="small">SK inmobiliaria </div>
                                    <div class="catalogConteinerObjekt">
                                        <a href="/index.php/propiedades/cat/2-" class="infoA">Квартира</a>
                                    </div>        
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>


                        <div class="catalogObject two" id="ip-listing-100977">
                            <div class="object">
                                <div class="objectImg">
                                    <div class="objectImgThumb">                
                                        <a href="/index.php/propiedades/property/100977-bungalo-na-verkhnem-etazhe-vsego-v-120-metrakh-ot-plyazha-los-n-ufragos-torrevekha"><img src="images/catalog/DSC009625af3072cce645_thumb.jpg" alt="Бунгало на Верхнем Этаже всего в 120 метрах от Пляжа Los Náufragos  " class="imgThumb" /></a>
                                    </div>
                                    <h4 class="price">74.500 €</h4>
                                </div> 
                                <div class="objectText">
                                    <div class="objectTextInfo">
                                        <a href="/index.php/propiedades/property/100977-bungalo-na-verkhnem-etazhe-vsego-v-120-metrakh-ot-plyazha-los-n-ufragos-torrevekha" class="infoA">Ti2341 - Бунгало на Верхнем Этаже всего в 120 метрах от Пляжа Los Náufragos  </a>
                                         - Торревьеха, Аликанте Spain<br /><strong>Спальни:</strong> 2 &#160;&#160;<strong>Ванные комнаты:</strong> 1 &#160;&#160;<strong>м<sup>2</sup>:</strong> 62 &#160;&#160;<strong>Этаж:</strong> Верхний этаж &#160;&#160;<strong>Регион:</strong> Аликанте &#160;&#160;            
                                    </div>
                                    <div class="infoFooter">Numérico: 1100 Бунгало на верхнем этаже находится всего в 120 метрах от пляжа Los Náufragos и расположен в Торревьхе. (...)
                                    </div>
                                    <div class="small">SK inmobiliaria </div>
                                    <div class="catalogConteinerObjekt">
                                        <a href="/index.php/propiedades/cat/3-bungalow" class="infoA">Бунгало</a>
                                    </div>        
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>


                        <div class="catalogObject" id="ip-listing-100493">
                            <div class="object">
                                <div class="objectImg">
                                    <div class="objectImgThumb">                
                                        <a href="/index.php/propiedades/property/100493-prekrasnyj-atiko-v-samom-tsentre-la-maty-s-potryasayushchim-vidom-na-lagunu-torrevekha"><img src="images/catalog/Fotos_Ti1324_para_WEB_4_56d43a52171f7_thumb.jpg" alt="Прекрасный Атико в Самом Центре Ла Маты с Потрясающим Видом на Лагуну" class="imgThumb" /></a>                
                                    </div>
                                    <h4 class="price">74.900 €</h4>
                                </div> 
                                <div class="objectText">
                                    <div class="objectTextInfo">
                                        <a href="/index.php/propiedades/property/100493-prekrasnyj-atiko-v-samom-tsentre-la-maty-s-potryasayushchim-vidom-na-lagunu-torrevekha" class="infoA">Ti1324 - Прекрасный Атико в Самом Центре Ла Маты с Потрясающим Видом на Лагуну</a>
                                         - Ла Мата (Торревьеха), Аликанте Spain<br /><strong>Спальни:</strong> 1 &#160;&#160;<strong>Ванные комнаты:</strong> 1 &#160;&#160;<strong>м<sup>2</sup>:</strong> 58 &#160;&#160;<strong>Регион:</strong> Аликанте &#160;&#160;           
                                    </div>
                                    <div class="infoFooter">Numérico: 1095 Квартира расположена на последнем этаже в самом центре Ла Маты. Состоит из 1 спальни, просторной (...)
                                    </div>
                                    <div class="small">SK inmobiliaria </div>
                                    <div class="catalogConteinerObjekt">
                                        <a href="/index.php/propiedades/cat/2-" class="infoA">Квартира</a>
                                    </div>        
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>


                        <div class="catalogObject two" id="ip-listing-100935">
                            <div class="object">
                                <div class="objectImg">
                                    <div class="objectImgThumb">                
                                        <a href="/index.php/propiedades/property/100935-kvartira-v-200-metrakh-ot-plyazha-la-kura-torrevekha"><img src="images/catalog/tn_DSC001735aa1585111e00_thumb.jpg" alt="Квартира в 200 метрах от Пляжа, Ла Кура" class="imgThumb" /></a>          
                                    </div>
                                    <h4 class="price">74.900 €</h4>
                                </div> 
                                <div class="objectText">
                                    <div class="objectTextInfo">
                                        <a href="/index.php/propiedades/property/100935-kvartira-v-200-metrakh-ot-plyazha-la-kura-torrevekha" class="infoA">Ti2327 - Квартира в 200 метрах от Пляжа, Ла Кура</a>
                                         - Торревьеха, Аликанте Spain<br /><strong>Спальни:</strong> 2 &#160;&#160;<strong>Ванные комнаты:</strong> 1 &#160;&#160;<strong>м<sup>2</sup>:</strong> 62 &#160;&#160;<strong>Этаж:</strong> Этаж: 1 &#160;&#160;<strong>Регион:</strong> Аликанте &#160;&#160;           
                                    </div>
                                    <div class="infoFooter">Numérico: 1120 Квартира площадью в 62м² расположена всего в 200 метрах от пляжа Кура, Торревьеха. Ориентированна на (...)
                                    </div>
                                    <div class="small">SK inmobiliaria </div>
                                    <div class="catalogConteinerObjekt">
                                        <a href="/index.php/propiedades/cat/2-" class="infoA">Квартира</a>
                                    </div>        
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="row-fluid ip-row0 ip-overview-row" id="ip-listing-100995">
                            <div class="span12">
                                <div class="span3 ip-overview-img">
                                    <div class="ip-property-thumb-holder">                
                                        <a href="/index.php/propiedades/property/100995-kvartira-s-bassejnom-urbanizatsii-v-torrevekhe-torrevekha927079495"><img src="imagesProject/DSC011575b058b3c89d3b_thumb.jpg" alt="Квартира с Бассейном Урбанизации в Торревьехе" class="img-polaroid ip-overview-thumb" /></a>                
                                                    </div>
                                    <h4 class="ip-overview-price pull-right">74.900 €</h4>
                                </div> 
                                <div class="span9 ip-overview-desc">
                                                                        <div class="ip-overview-title">
                                        <a href="/index.php/propiedades/property/100995-kvartira-s-bassejnom-urbanizatsii-v-torrevekhe-torrevekha927079495" class="ip-property-header-accent">Ti2348 - Квартира с Бассейном Урбанизации в Торревьехе</a>
                                         - Торревьеха, Аликанте Spain<br /><strong>Спальни:</strong> 2 &#160;&#160;<strong>Ванные комнаты:</strong> 1 &#160;&#160;<strong>м<sup>2</sup>:</strong> 55 &#160;&#160;<strong>Этаж:</strong>1 &#160;&#160;<strong>Регион:</strong> Аликанте &#160;&#160;            </div>

                                    <div class="ip-overview-short-desc">Numérico: 1100
                        Квартира на первом этаже на ходится в Торревьехе. Ориентирована на Юго-Восток. Жилье площадью в 55м² (...)</div><div class="small">SK inmobiliaria </div><div class="ip-overview-catcontainer"><a  class="infoA" href="/index.php/propiedades/cat/2-">Квартира</a></div>        </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>



                        <div class="row-fluid ip-row1 ip-overview-row" id="ip-listing-100972">
                            <div class="span12">
                                <div class="span3 ip-overview-img">
                                    <div class="ip-property-thumb-holder">                
                                        <a href="/index.php/propiedades/property/100972-krasivaya-kvartira-v-tsentre-torrevekhi-torrevekha"><img src="imagesProject/DSC006535aed80624493e_thumb.jpg" alt="Красивая Квартира в Центре Торревьехи" class="img-polaroid ip-overview-thumb" /></a>                
                                                    </div>
                                    <h4 class="ip-overview-price pull-right">75.000 €</h4>
                                </div> 
                                <div class="span9 ip-overview-desc">
                                                                        <div class="ip-overview-title">
                                        <a href="/index.php/propiedades/property/100972-krasivaya-kvartira-v-tsentre-torrevekhi-torrevekha" class="ip-property-header-accent">Ti2352 - Красивая Квартира в Центре Торревьехи</a>
                                         - Торревьеха, Аликанте Spain<br /><strong>Спальни:</strong> 2 &#160;&#160;<strong>Ванные комнаты:</strong> 2 &#160;&#160;<strong>м<sup>2</sup>:</strong> 80 &#160;&#160;<strong>Этаж:</strong> 2 &#160;&#160;<strong>Регион:</strong> Аликанте &#160;&#160;            </div>

                                    <div class="ip-overview-short-desc">Numérico: 1100
                        Квартира находится на 2м этаже и расположена в центре Торревьехи. Жилье площадью в 80м² состоит из 2 (...)</div><div class="small">SK inmobiliaria </div><div class="ip-overview-catcontainer"><a  class="infoA" href="/index.php/propiedades/cat/2-">Квартира</a></div>        </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>



                        <div class="row-fluid ip-row0 ip-overview-row" id="ip-listing-100717">
                            <div class="span12">
                                <div class="span3 ip-overview-img">
                                    <div class="ip-property-thumb-holder">                
                                        <a href="/index.php/propiedades/property/100717-828897755"><img src="imagesProject/apto_1_57c3fa80db111_thumb.jpg" alt=" Квартира с Панорамным Видом на Море в Ла Мате" class="img-polaroid ip-overview-thumb" /></a>                
                                                    </div>
                                    <h4 class="ip-overview-price pull-right">76.000 €</h4>
                                </div> 
                                <div class="span9 ip-overview-desc">
                                                                        <div class="ip-overview-title">
                                        <a href="/index.php/propiedades/property/100717-828897755" class="ip-property-header-accent">Ti1058 -  Квартира с Панорамным Видом на Море в Ла Мате</a>
                                         - Ла Мата (Торревьеха), Аликанте Spain<br /><strong>Спальни:</strong> 1 &#160;&#160;<strong>Ванные комнаты:</strong> 1 &#160;&#160;<strong>м<sup>2</sup>:</strong> 42 &#160;&#160;<strong>Этаж:</strong>2 &#160;&#160;<strong>Регион:</strong> Аликанте &#160;&#160;            </div>

                                    <div class="ip-overview-short-desc"> 
                        Numérico: 1095
                        Квартира с панорамным видом на море расположена на 2м этаже в прекрасной резиденции, всего в 75 (...)</div><div class="small">SK inmobiliaria </div><div class="ip-overview-catcontainer"><a  class="infoA" href="/index.php/propiedades/cat/2-">Квартира</a></div>        </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>



                        <div class="row-fluid ip-row1 ip-overview-row" id="ip-listing-100901">
                            <div class="span12">
                                <div class="span3 ip-overview-img">
                                    <div class="ip-property-thumb-holder">                
                                        <a href="/index.php/propiedades/property/100901-kvartira-v-rajone-abaneras-habaneras-torrevekha-torrevekha"><img src="imagesProject/foto125a759a757d487_thumb.jpg" alt="Квартира в Районе Абанерас (Habaneras), Торревьеха" class="img-polaroid ip-overview-thumb" /></a>                
                                                    </div>
                                    <h4 class="ip-overview-price pull-right">76.500 €</h4>
                                </div> 
                                <div class="span9 ip-overview-desc">
                                                                        <div class="ip-overview-title">
                                        <a href="/index.php/propiedades/property/100901-kvartira-v-rajone-abaneras-habaneras-torrevekha-torrevekha" class="ip-property-header-accent">Ti2317 - Квартира в Районе Абанерас (Habaneras), Торревьеха</a>
                                         - Торревьеха, Аликанте Spain<br /><strong>Спальни:</strong> 2 &#160;&#160;<strong>Ванные комнаты:</strong> 1 &#160;&#160;<strong>м<sup>2</sup>:</strong> 72 &#160;&#160;<strong>Регион:</strong> Аликанте &#160;&#160;            </div>

                                    <div class="ip-overview-short-desc">Numérico: 1095
                        Квартира расположзена в районе Абанерас, в Торревьехе. До пляжей Лос Локос и Эль Кура всего 700 (...)</div><div class="small">SK inmobiliaria </div><div class="ip-overview-catcontainer"><a  class="infoA" href="/index.php/propiedades/cat/2-">Квартира</a></div>        </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>



                        <div class="row-fluid ip-row0 ip-overview-row" id="ip-listing-100900">
                            <div class="span12">
                                <div class="span3 ip-overview-img">
                                    <div class="ip-property-thumb-holder">                
                                        <a href="/index.php/propiedades/property/100900-dupleks-v-torre-del-moro-torrevekha-torrevekha"><img src="imagesProject/foto15a758d66dc022_thumb.jpg" alt="Дуплекс в Torre del Moro, Торревьеха" class="img-polaroid ip-overview-thumb" /></a>                
                                                    </div>
                                    <h4 class="ip-overview-price pull-right">77.000 €</h4>
                                </div> 
                                <div class="span9 ip-overview-desc">
                                                                        <div class="ip-overview-title">
                                        <a href="/index.php/propiedades/property/100900-dupleks-v-torre-del-moro-torrevekha-torrevekha" class="ip-property-header-accent">Ti1301 - Дуплекс в Torre del Moro, Торревьеха</a>
                                         - Торревьеха, Аликанте Spain<br /><strong>Спальни:</strong> 1 &#160;&#160;<strong>Ванные комнаты:</strong> 1 &#160;&#160;<strong>м<sup>2</sup>:</strong> 35 &#160;&#160;<strong>Этаж:</strong> 2 &#160;&#160;<strong>Регион:</strong> Аликанте &#160;&#160;            </div>

                                    <div class="ip-overview-short-desc">Numérico: 1095
                        Дуплекс расположен в Торре дель Моро, пляж Ла Маты. При входе есть небольшой дворик. Жилье состоит (...)</div><div class="small">SK inmobiliaria </div><div class="ip-overview-catcontainer"><a  class="infoA" href="/index.php/propiedades/cat/13-duplex">Дуплекс</a></div>        </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>



                        <div class="row-fluid ip-row1 ip-overview-row" id="ip-listing-100902">
                            <div class="span12">
                                <div class="span3 ip-overview-img">
                                    <div class="ip-property-thumb-holder">                
                                        <a href="/index.php/propiedades/property/100902-kvartira-s-bassejnom-v-urbanizatsii-plyazh-la-maty-torrevekha"><img src="imagesProject/foto165a75afa2b8800_thumb.jpg" alt="Квартира с Бассейном в Урбанизации, Пляж Ла Маты" class="img-polaroid ip-overview-thumb" /></a>                
                                                    </div>
                                    <h4 class="ip-overview-price pull-right">77.000 €</h4>
                                </div> 
                                <div class="span9 ip-overview-desc">
                                                                        <div class="ip-overview-title">
                                        <a href="/index.php/propiedades/property/100902-kvartira-s-bassejnom-v-urbanizatsii-plyazh-la-maty-torrevekha" class="ip-property-header-accent">Ti1302 - Квартира с Бассейном в Урбанизации, Пляж Ла Маты</a>
                                         - Торревьеха, Аликанте Spain<br /><strong>Спальни:</strong> 1 &#160;&#160;<strong>Ванные комнаты:</strong> 1 &#160;&#160;<strong>м<sup>2</sup>:</strong> 41 &#160;&#160;<strong>Регион:</strong> Аликанте &#160;&#160;            </div>

                                    <div class="ip-overview-short-desc">Numérico: 1095
                        Квартира площадью в 41м² расположена в районе Торре дель Моро, пляж Ла Маты. Квартира состоит из 1 (...)</div><div class="small">SK inmobiliaria </div><div class="ip-overview-catcontainer"><a  class="infoA" href="/index.php/propiedades/cat/2-">Квартира</a></div>        </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>



                        <div class="row-fluid ip-row0 ip-overview-row" id="ip-listing-100976">
                            <div class="span12">
                                <div class="span3 ip-overview-img">
                                    <div class="ip-property-thumb-holder">                
                                        <a href="/index.php/propiedades/property/100976-kvartira-vsego-v-250-metrakh-ot-plyazha-torrevekha-torrevekha"><img src="imagesProject/DSC010085af1d587a616f_thumb.jpg" alt="Квартира всего в 250 метрах от Пляжей Acequion и Naufragos, Торревьеха " class="img-polaroid ip-overview-thumb" /></a>                
                                    </div>
                                    <h4 class="ip-overview-price pull-right">77.500 €</h4>
                                </div> 
                                <div class="span9 ip-overview-desc">
                                                                        <div class="ip-overview-title">
                                        <a href="/index.php/propiedades/property/100976-kvartira-vsego-v-250-metrakh-ot-plyazha-torrevekha-torrevekha" class="ip-property-header-accent">Ti2340 - Квартира всего в 250 метрах от Пляжей Acequion и Naufragos, Торревьеха </a>
                                         - Торревьеха, Аликанте Spain<br /><strong>Спальни:</strong> 2 &#160;&#160;<strong>Ванные комнаты:</strong> 1 &#160;&#160;<strong>м<sup>2</sup>:</strong> 55 &#160;&#160;<strong>Этаж:</strong> 5 &#160;&#160;<strong>Регион:</strong> Аликанте &#160;&#160;            </div>

                                    <div class="ip-overview-short-desc">Numérico: 1100
                        Квартира на нижнем этаже находится в Торревьехе вблизи Парка Rincón de Asturias, всего в 250 метрах от пляжей (...)</div><div class="small">SK inmobiliaria </div><div class="ip-overview-catcontainer"><a  class="infoA" href="/index.php/propiedades/cat/2-">Квартира</a></div>        </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>


                        <div class="row-fluid ip-row0 ip-overview-row" id="ip-listing-101040">
                            <div class="span12">
                                <div class="span3 ip-overview-img">
                                    <div class="ip-property-thumb-holder">                
                                        <a href="/index.php/propiedades/property/101040-kvartira-s-vidom-na-bassejn-urbanizatsii-v-torrevekhe-torrevekha"><img src="imagesProject/DSC014675b48695432bdc_thumb.jpg" alt="Квартира с Видом на Бассейн Урбанизации в Торревьехе" class="img-polaroid ip-overview-thumb" /></a>                
                                                    </div>
                                    <h4 class="ip-overview-price pull-right">79.000 €</h4>
                                </div> 
                                <div class="span9 ip-overview-desc">
                                                                        <div class="ip-overview-title">
                                        <a href="/index.php/propiedades/property/101040-kvartira-s-vidom-na-bassejn-urbanizatsii-v-torrevekhe-torrevekha" class="ip-property-header-accent">Ti2355 - Квартира с Видом на Бассейн Урбанизации в Торревьехе</a>
                                         - Торревьеха, Аликанте Spain<br /><strong>Спальни:</strong> 2 &#160;&#160;<strong>Ванные комнаты:</strong> 1 &#160;&#160;<strong>м<sup>2</sup>:</strong> 65 &#160;&#160;<strong>Этаж:</strong>3 &#160;&#160;<strong>Регион:</strong> Аликанте &#160;&#160;            </div>

                                    <div class="ip-overview-short-desc">Numérico: 1100
                        Квартира на 3м этаже с видом на бассейн урбанизации расположена в Торревьехе, всего в 600 метрах от (...)</div><div class="small">SK inmobiliaria </div><div class="ip-overview-catcontainer"><a  class="infoA" href="/index.php/propiedades/cat/2-">Квартира</a></div>        </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>



                        <div class="row-fluid ip-row1 ip-overview-row" id="ip-listing-100937">
                            <div class="span12">
                                <div class="span3 ip-overview-img">
                                    <div class="ip-property-thumb-holder">                
                                        <a href="/index.php/propiedades/property/100937-kvartira-na-nizhnem-etazhe-v-la-dehesa-de-campoamor-oriuela-kosta-oriuela-kosta"><img src="imagesProject/205aa69b23dd51e_thumb.jpg" alt="Квартира на Нижнем Этаже в La Dehesa de Campoamor (Ориуэла Коста)" class="img-polaroid ip-overview-thumb" /></a>                
                                                    </div>
                                    <h4 class="ip-overview-price pull-right">79.500 €</h4>
                                </div> 
                                <div class="span9 ip-overview-desc">
                                                                        <div class="ip-overview-title">
                                        <a href="/index.php/propiedades/property/100937-kvartira-na-nizhnem-etazhe-v-la-dehesa-de-campoamor-oriuela-kosta-oriuela-kosta" class="ip-property-header-accent">Ti1012 - Квартира на Нижнем Этаже в La Dehesa de Campoamor (Ориуэла Коста)</a>
                                         - Ориуэла Коста, Аликанте Spain<br /><strong>Спальни:</strong> 1 &#160;&#160;<strong>Ванные комнаты:</strong> 1 &#160;&#160;<strong>м<sup>2</sup>:</strong> 42 &#160;&#160;<strong>Регион:</strong> Аликанте &#160;&#160;            </div>

                                    <div class="ip-overview-short-desc">Numérico: 1100
                        Квартира на нижнем этаже, состояние практически новое, с панорамным видом на парк. Ориентирована на (...)</div><div class="small">SK inmobiliaria </div><div class="ip-overview-catcontainer"><a  class="infoA" href="/index.php/propiedades/cat/2-">Квартира</a></div>        </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>


                        <div class="row-fluid ip-row1 ip-overview-row" id="ip-listing-100926">
                            <div class="span12">
                                <div class="span3 ip-overview-img">
                                    <div class="ip-property-thumb-holder">                
                                        <a href="/index.php/propiedades/property/100926-kvartira-s-bassejnom-urbanizatsii-v-torrevekhe-torrevekha"><img src="imagesProject/tn_DSC001465a8e8c256774b_thumb.jpg" alt="Квартира с Бассейном Урбанизации в Торревьехе" class="img-polaroid ip-overview-thumb" /></a>                
                                                    </div>
                                    <h4 class="ip-overview-price pull-right">79.900 €</h4>
                                </div> 
                                <div class="span9 ip-overview-desc">
                                                                        <div class="ip-overview-title">
                                        <a href="/index.php/propiedades/property/100926-kvartira-s-bassejnom-urbanizatsii-v-torrevekhe-torrevekha" class="ip-property-header-accent">Ti3314 - Квартира с Бассейном Урбанизации в Торревьехе</a>
                                         - Торревьеха, Аликанте Spain<br /><strong>Спальни:</strong> 3 &#160;&#160;<strong>Ванные комнаты:</strong> 1 &#160;&#160;<strong>м<sup>2</sup>:</strong> 64 &#160;&#160;<strong>Этаж:</strong> 2 &#160;&#160;<strong>Регион:</strong> Аликанте &#160;&#160;            </div>

                                    <div class="ip-overview-short-desc">Numérico: 1100
                        Очень светлая и просторная квартира, площадью в 64м² расположена в Торревьехе. Состоит из 1 (...)</div><div class="small">SK inmobiliaria </div><div class="ip-overview-catcontainer"><a  class="infoA" href="/index.php/propiedades/cat/2-">Квартира</a></div>        </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>



                        <div class="row-fluid ip-row0 ip-overview-row" id="ip-listing-100994">
                            <div class="span12">
                                <div class="span3 ip-overview-img">
                                    <div class="ip-property-thumb-holder">                
                                        <a href="/index.php/propiedades/property/100994-uyutnaya-kvartira-v-torrevekhe-s-garazhom-i-bassejnom-urbanizatsii-torrevekha"><img src="imagesProject/1_a5b0580bbe645d_thumb.jpg" alt="Уютная Квартира в Торревьехе с Гаражом и Бассейном Урбанизации" class="img-polaroid ip-overview-thumb" /></a>                
                                                    </div>
                                    <h4 class="ip-overview-price pull-right">79.950 €</h4>
                                </div> 
                                <div class="span9 ip-overview-desc">
                                    <div class="ip-overview-title">
                                        <a href="/index.php/propiedades/property/100994-uyutnaya-kvartira-v-torrevekhe-s-garazhom-i-bassejnom-urbanizatsii-torrevekha" class="ip-property-header-accent">Ti2350 - Уютная Квартира в Торревьехе с Гаражом и Бассейном Урбанизации</a>
                                         - Торревьеха, Аликанте Spain<br /><strong>Спальни:</strong> 2 &#160;&#160;<strong>Ванные комнаты:</strong> 1 &#160;&#160;<strong>м<sup>2</sup>:</strong> 60 &#160;&#160;<strong>Этаж:</strong> 3 &#160;&#160;<strong>Регион:</strong> Аликанте &#160;&#160;            </div>

                                    <div class="ip-overview-short-desc">Numérico: 1100
                        Уютная квартра площадью в 60м² расположена в Торревьехе вблизи пляжа Acequión. Ориентирована на Юг. (...)</div><div class="small">SK inmobiliaria </div><div class="ip-overview-catcontainer"><a  class="infoA" href="/index.php/propiedades/cat/2-">Квартира</a></div>        </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>



                        <div class="row-fluid ip-row1 ip-overview-row" id="ip-listing-100848">
                            <div class="span12">
                                <div class="span3 ip-overview-img">
                                    <div class="ip-property-thumb-holder">                
                                        <a href="/index.php/propiedades/property/100848-kvartira-v-tsentre-torrevekhi-torrevekha"><img src="imagesProject/foto_redu_Ti2134_2_58f5fff9bb2be_thumb.jpg" alt="Квартира в Центре Торревьехи" class="img-polaroid ip-overview-thumb" /></a>                
                                                    </div>
                                    <h4 class="ip-overview-price pull-right">81.000 €</h4>
                                </div> 
                                <div class="span9 ip-overview-desc">
                                                                        <div class="ip-overview-title">
                                        <a href="/index.php/propiedades/property/100848-kvartira-v-tsentre-torrevekhi-torrevekha" class="ip-property-header-accent">Ti2134 - Квартира в Центре Торревьехи</a>
                                         - Торревьеха, Аликанте Spain<br /><strong>Спальни:</strong> 2 &#160;&#160;<strong>Ванные комнаты:</strong> 1 &#160;&#160;<strong>м<sup>2</sup>:</strong> 70 &#160;&#160;<strong>Регион:</strong> Аликанте &#160;&#160;            </div>

                                    <div class="ip-overview-short-desc"> 
                        Numérico: 1095
                        Квартира расположена в центре Торревьехи, состоит из 2 спален, 1 ванной комнаты для людей с (...)</div><div class="small">SK inmobiliaria </div><div class="ip-overview-catcontainer"><a  class="infoA" href="/index.php/propiedades/cat/2-">Квартира</a></div>        </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>



                        <div class="row-fluid ip-row0 ip-overview-row" id="ip-listing-100847">
                            <div class="span12">
                                <div class="span3 ip-overview-img">
                                    <div class="ip-property-thumb-holder">                
                                        <a href="/index.php/propiedades/property/100847-solnechnaya-uglovaya-kvartira-v-novoj-torrevekhe-torrevekha"><img src="imagesProject/IMG_264358f5f709817f1_thumb.jpg" alt="Солнечная Угловая Квартира в Новой Торревьехе" class="img-polaroid ip-overview-thumb" /></a>                
                                                    </div>
                                    <h4 class="ip-overview-price pull-right">82.000 €</h4>
                                </div> 
                                <div class="span9 ip-overview-desc">
                                                                        <div class="ip-overview-title">
                                        <a href="/index.php/propiedades/property/100847-solnechnaya-uglovaya-kvartira-v-novoj-torrevekhe-torrevekha" class="ip-property-header-accent">Ti2040  - Солнечная Угловая Квартира в Новой Торревьехе</a>
                                         - Торревьеха, Аликанте Spain<br /><strong>Спальни:</strong> 2 &#160;&#160;<strong>Ванные комнаты:</strong> 1 &#160;&#160;<strong>м<sup>2</sup>:</strong> 56 &#160;&#160;<strong>Этаж:</strong>2 &#160;&#160;<strong>Регион:</strong> Аликанте &#160;&#160;            </div>

                                    <div class="ip-overview-short-desc"> 
                        Numérico: 1095
                        Квартира расположена в новой Торревьехе, 1,5км до пляжа. Находится на 2м этаже, ориентирована на (...)</div><div class="small">SK inmobiliaria </div><div class="ip-overview-catcontainer"><a  class="infoA" href="/index.php/propiedades/cat/2-">Квартира</a></div>        </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>



                        <div class="row-fluid ip-row1 ip-overview-row" id="ip-listing-100767">
                            <div class="span12">
                                <div class="span3 ip-overview-img">
                                    <div class="ip-property-thumb-holder">                
                                        <a href="/index.php/propiedades/property/100767-1980902016"><img src="imagesProject/Fotos_Ti3065__16_58062a618146e_thumb.jpg" alt="Угловая квартира Вблизи Пляжа Гуардамар" class="img-polaroid ip-overview-thumb" /></a>                
                                                    </div>
                                    <h4 class="ip-overview-price pull-right">82.900 €</h4>
                                </div> 
                                <div class="span9 ip-overview-desc">
                                                                        <div class="ip-overview-title">
                                        <a href="/index.php/propiedades/property/100767-1980902016" class="ip-property-header-accent">Ti3065 - Угловая квартира Вблизи Пляжа Гуардамар</a>
                                         - Гуардамар, Аликанте Spain<br /><strong>Спальни:</strong> 3 &#160;&#160;<strong>Ванные комнаты:</strong> 1 &#160;&#160;<strong>м<sup>2</sup>:</strong> 72 &#160;&#160;<strong>Регион:</strong> Аликанте &#160;&#160;            </div>

                                    <div class="ip-overview-short-desc"> 
                        Numérico: 1095
                        Угловая квартира, площадью в 72м², находится вблизи пляжа Гуардамар. Расположение западное. (...)</div><div class="small">SK inmobiliaria </div><div class="ip-overview-catcontainer"><a  class="infoA" href="/index.php/propiedades/cat/2-">Квартира</a></div>        </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>



                        <div class="row-fluid ip-row0 ip-overview-row" id="ip-listing-100963">
                            <div class="span12">
                                <div class="span3 ip-overview-img">
                                    <div class="ip-property-thumb-holder">                
                                        <a href="/index.php/propiedades/property/100963-prekrasnaya-kvartira-v-400-metrakh-ot-plyazha-kura-torrevekha-torrevekha"><img src="imagesProject/DSC004915ae2dab50c66b_thumb.jpg" alt="Прекрасная Квартира в 400 метрах от Пляжа Кура, Торревьеха" class="img-polaroid ip-overview-thumb" /></a>                
                                                    </div>
                                    <h4 class="ip-overview-price pull-right">83.500 €</h4>
                                </div> 
                                <div class="span9 ip-overview-desc">
                                                                        <div class="ip-overview-title">
                                        <a href="/index.php/propiedades/property/100963-prekrasnaya-kvartira-v-400-metrakh-ot-plyazha-kura-torrevekha-torrevekha" class="ip-property-header-accent">Ti2334 - Прекрасная Квартира в 400 метрах от Пляжа Кура, Торревьеха</a>
                                         - Торревьеха, Аликанте Spain<br /><strong>Спальни:</strong> 2 &#160;&#160;<strong>Ванные комнаты:</strong> 1 &#160;&#160;<strong>м<sup>2</sup>:</strong> 55 &#160;&#160;<strong>Этаж:</strong> 1 &#160;&#160;<strong>Регион:</strong> Аликанте &#160;&#160;            </div>

                                    <div class="ip-overview-short-desc">Numérico: 1100
                        Квартира расположенна на 1м этаже, ориентирована на Юг и находится в Торревьехе всего в 400 метрах от (...)</div><div class="small">SK inmobiliaria </div><div class="ip-overview-catcontainer"><a  class="infoA" href="/index.php/propiedades/cat/2-">Квартира</a></div>        </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>



                        <div class="row-fluid ip-row1 ip-overview-row" id="ip-listing-100998">
                            <div class="span12">
                                <div class="span3 ip-overview-img">
                                    <div class="ip-property-thumb-holder">                
                                        <a href="/index.php/propiedades/property/100998-krasivaya-kvartira-v-80m-ot-plyazha-s-garazhom-torrevekha-torrevekha"><img src="imagesProject/DSC013895b2b559daf08a_thumb.jpg" alt="Красивая Квартира в 80м от Пляжа с Гаражом, Торревьеха" class="img-polaroid ip-overview-thumb" /></a>                
                                                    </div>
                                    <h4 class="ip-overview-price pull-right">84.900 €</h4>
                                </div> 
                                <div class="span9 ip-overview-desc">
                                                                        <div class="ip-overview-title">
                                        <a href="/index.php/propiedades/property/100998-krasivaya-kvartira-v-80m-ot-plyazha-s-garazhom-torrevekha-torrevekha" class="ip-property-header-accent">Ti2351 - Красивая Квартира в 80м от Пляжа с Гаражом, Торревьеха</a>
                                         - Торревьеха, Аликанте Spain<br /><strong>Спальни:</strong> 2 &#160;&#160;<strong>Ванные комнаты:</strong> 1 &#160;&#160;<strong>м<sup>2</sup>:</strong> 68 &#160;&#160;<strong>Регион:</strong> Аликанте &#160;&#160;            </div>

                                    <div class="ip-overview-short-desc">Numérico: 1100
                        Красивая квартира находится на последнем этаже всего в 80 метрах от пляжа Acequión в Торревьехе. Жилье (...)</div><div class="small">SK inmobiliaria </div><div class="ip-overview-catcontainer"><a  class="infoA" href="/index.php/propiedades/cat/2-">Квартира</a></div>        </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>



                        <div class="row-fluid ip-row0 ip-overview-row" id="ip-listing-100664">
                            <div class="span12">
                                <div class="span3 ip-overview-img">
                                    <div class="ip-property-thumb-holder">                
                                        <a href="/index.php/propiedades/property/100664-298769552"><img src="imagesProject/IMG_6270577d3005159b6_thumb.jpg" alt="Красивая и Светлая Квартира в нескольких минутах от Потрясающего Пляжа Ла Маты" class="img-polaroid ip-overview-thumb" /></a>                
                                                    </div>
                                    <h4 class="ip-overview-price pull-right">85.000 €</h4>
                                </div> 
                                <div class="span9 ip-overview-desc">
                                                                        <div class="ip-overview-title">
                                        <a href="/index.php/propiedades/property/100664-298769552" class="ip-property-header-accent">Ti1328 - Красивая и Светлая Квартира в нескольких минутах от Потрясающего Пляжа Ла Маты</a>
                                         - Ла Мата (Торревьеха), Аликанте Spain<br /><strong>Спальни:</strong> 1 &#160;&#160;<strong>Ванные комнаты:</strong> 1 &#160;&#160;<strong>м<sup>2</sup>:</strong> 45 &#160;&#160;<strong>Регион:</strong> Аликанте &#160;&#160;            </div>

                                    <div class="ip-overview-short-desc"> 
                        Numérico: 1095
                        Квартира расположена на 4м этаже в резиденции Виньямар II, Ла Мата (Viñamar II, La Mata), ориентирована на (...)</div><div class="small">SK inmobiliaria </div><div class="ip-overview-catcontainer"><a  class="infoA" href="/index.php/propiedades/cat/2-">Квартира</a></div>        </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="row-fluid ip-row0 ip-overview-row" id="ip-listing-100983">
                            <div class="span12">
                                <div class="span3 ip-overview-img">
                                    <div class="ip-property-thumb-holder">                
                                        <a href="/index.php/propiedades/property/100983-kvartira-s-garazhom-vsego-v-300-metrakh-ot-plyazha-acequi-n-torrevekha-torrevekha"><img src="imagesProject/DSCF80355af9b6a140c95_thumb.jpg" alt="Квартира с Гаражом всего в 300 метрах от Пляжа Acequión, Торревьеха " class="img-polaroid ip-overview-thumb" /></a>                
                                    </div>
                                    <h4 class="ip-overview-price pull-right">85.000 €</h4>
                                </div> 
                                <div class="span9 ip-overview-desc">
                                                                        <div class="ip-overview-title">
                                        <a href="/index.php/propiedades/property/100983-kvartira-s-garazhom-vsego-v-300-metrakh-ot-plyazha-acequi-n-torrevekha-torrevekha" class="ip-property-header-accent">Ti2344 - Квартира с Гаражом всего в 300 метрах от Пляжа Acequión, Торревьеха </a>
                                         - Торревьеха, Аликанте Spain<br /><strong>Спальни:</strong> 2 &#160;&#160;<strong>Ванные комнаты:</strong> 1 &#160;&#160;<strong>м<sup>2</sup>:</strong> 64 &#160;&#160;<strong>Этаж:</strong>  2 &#160;&#160;<strong>Регион:</strong> Аликанте &#160;&#160;            </div>

                                    <div class="ip-overview-short-desc">Numérico: 1100
                        Квартира на 2м этаже находится всего в 100 метрах от пляжа Acequión в Торревьехе. Квартира площадью в 64м² (...)</div><div class="small">SK inmobiliaria </div><div class="ip-overview-catcontainer"><a class="infoA" href="/index.php/propiedades/cat/2-">Квартира</a></div>        </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>



                        <div class="row-fluid ip-row1 ip-overview-row" id="ip-listing-100980">
                            <div class="span12">
                                <div class="span3 ip-overview-img">
                                    <div class="ip-property-thumb-holder">                
                                        <a href="/index.php/propiedades/property/100980-prostornaya-kvartira-v-600-metrakh-ot-plyazha-kura-torrevekha-torrevekha"><img src="imagesProject/DSC008725af5ab440fc82_thumb.jpg" alt="Просторная Квартира в 600 метрах от Пляжа Кура, Торревьеха " class="img-polaroid ip-overview-thumb" /></a>                
                                    </div>
                                    <h4 class="ip-overview-price pull-right">87.900 €</h4>
                                </div> 
                                <div class="span9 ip-overview-desc">
                                                                        <div class="ip-overview-title">
                                        <a href="/index.php/propiedades/property/100980-prostornaya-kvartira-v-600-metrakh-ot-plyazha-kura-torrevekha-torrevekha" class="ip-property-header-accent">Ti3319 - Просторная Квартира в 600 метрах от Пляжа Кура, Торревьеха </a>
                                         - Торревьеха, Аликанте Spain<br /><strong>Спальни:</strong> 3 &#160;&#160;<strong>Ванные комнаты:</strong> 1 &#160;&#160;<strong>м<sup>2</sup>:</strong> 81 &#160;&#160;<strong>Этаж:</strong>  3 &#160;&#160;<strong>Регион:</strong> Аликанте &#160;&#160;            </div>

                                    <div class="ip-overview-short-desc">Numérico: 1100
                        Просторная квартира находится на 3м этаже, всего в 600 метрах от пляжа Кура, в самом центре (...)</div><div class="small">SK inmobiliaria </div><div class="ip-overview-catcontainer"><a class="infoA" href="/index.php/propiedades/cat/2-">Квартира</a></div>        </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>



                        <div class="row-fluid ip-row0 ip-overview-row" id="ip-listing-100870">
                            <div class="span12">
                                <div class="span3 ip-overview-img">
                                    <div class="ip-property-thumb-holder">                
                                        <a href="/index.php/propiedades/property/100870-kvartira-v-tsentre-torrevekhi-s-bassejnom-v-urbanizvtsii-torrevekha"><img src="imagesProject/Fotos_Ti2258_para_WEB_1_5a54e723a6b19_thumb.jpg" alt="Квартира в Центре Торревьехи с Бассейном в Урбанизвции" class="img-polaroid ip-overview-thumb" /></a>                
                                                    </div>
                                    <h4 class="ip-overview-price pull-right">88.000 €</h4>
                                </div> 
                                <div class="span9 ip-overview-desc">
                                                                        <div class="ip-overview-title">
                                        <a href="/index.php/propiedades/property/100870-kvartira-v-tsentre-torrevekhi-s-bassejnom-v-urbanizvtsii-torrevekha" class="ip-property-header-accent">Ti2258 - Квартира в Центре Торревьехи с Бассейном в Урбанизвции</a>
                                         - Торревьеха, Аликанте Spain<br /><strong>Спальни:</strong> 2 &#160;&#160;<strong>Ванные комнаты:</strong> 1 &#160;&#160;<strong>м<sup>2</sup>:</strong> 65 &#160;&#160;<strong>Регион:</strong> Аликанте &#160;&#160;            </div>

                                    <div class="ip-overview-short-desc"> 
                        Numérico: 1095
                        Квартира, площадью в 65м², находится в отличном состоянии и расположена в центре Торревьехи. (...)</div><div class="small">SK inmobiliaria </div><div class="ip-overview-catcontainer"><a class="infoA" href="/index.php/propiedades/cat/2-">Квартира</a></div>        </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>



                        <div class="row-fluid ip-row0 ip-overview-row" id="ip-listing-100987">
                            <div class="span12">
                                <div class="span3 ip-overview-img">
                                    <div class="ip-property-thumb-holder">                
                                        <a href="/index.php/propiedades/property/100987-kvartira-vsego-v-50-metrakh-ot-plyazha-los-lokos-torrevekha-torrevekha"><img src="imagesProject/DSC011315afef04966bdf_thumb.jpg" alt="Квартира всего в 50 метрах от пляжа Лос Локос, Торревьеха" class="img-polaroid ip-overview-thumb" /></a>                
                                                    </div>
                                    <h4 class="ip-overview-price pull-right">89.000 €</h4>
                                </div> 
                                <div class="span9 ip-overview-desc">
                                                                        <div class="ip-overview-title">
                                        <a href="/index.php/propiedades/property/100987-kvartira-vsego-v-50-metrakh-ot-plyazha-los-lokos-torrevekha-torrevekha" class="ip-property-header-accent">Ti2347 - Квартира всего в 50 метрах от пляжа Лос Локос, Торревьеха</a>
                                         - Торревьеха, Аликанте Spain<br /><strong>Спальни:</strong> 2 &#160;&#160;<strong>Ванные комнаты:</strong> 1 &#160;&#160;<strong>м<sup>2</sup>:</strong> 60 &#160;&#160;<strong>Этаж:</strong>  3 &#160;&#160;<strong>Регион:</strong> Аликанте &#160;&#160;            </div>

                                    <div class="ip-overview-short-desc">Numérico: 1100
                        Квартира находится на 3м этаже, всего в 50 метрах от пляжа. Жилье площадью в 60м² состоит из 2 спален, 1 (...)</div><div class="small">SK inmobiliaria </div><div class="ip-overview-catcontainer"><a class="infoA" href="/index.php/propiedades/cat/2-">Квартира</a></div>        </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>



                        <div class="row-fluid ip-row1 ip-overview-row" id="ip-listing-101042">
                            <div class="span12">
                                <div class="span3 ip-overview-img">
                                    <div class="ip-property-thumb-holder">                
                                        <a href="/index.php/propiedades/property/101042-kvartira-vsego-v-30-metrakh-ot-plyazha-acequi-n-s-prekrasnym-vidom-na-more-torrevekha"><img src="imagesProject/DSC015795b51ae6b43b3f_thumb.jpg" alt="Квартира всего в 30 метрах от Пляжа Acequión с Прекрасным видом на Море" class="img-polaroid ip-overview-thumb" /></a>                
                                                    </div>
                                    <h4 class="ip-overview-price pull-right">89.500 €</h4>
                                </div> 
                                <div class="span9 ip-overview-desc">
                                                                        <div class="ip-overview-title">
                                        <a href="/index.php/propiedades/property/101042-kvartira-vsego-v-30-metrakh-ot-plyazha-acequi-n-s-prekrasnym-vidom-na-more-torrevekha" class="ip-property-header-accent">Ti3339 - Квартира всего в 30 метрах от Пляжа Acequión с Прекрасным видом на Море</a>
                                         - Торревьеха, Аликанте Spain<br /><strong>Спальни:</strong> 3 &#160;&#160;<strong>Ванные комнаты:</strong> 2 &#160;&#160;<strong>м<sup>2</sup>:</strong> 100 &#160;&#160;<strong>Этаж:</strong>  2 &#160;&#160;<strong>Регион:</strong> Аликанте &#160;&#160;            </div>

                                    <div class="ip-overview-short-desc">Numérico: 1100
                        Просторная квартира находится на втором этаже на 2й линии моря, прекрасного пляжа Acequión в (...)</div><div class="small">SK inmobiliaria </div><div class="ip-overview-catcontainer"><a class="infoA" href="/index.php/propiedades/cat/2-">Квартира</a></div>        </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>



                        <div class="row-fluid ip-row0 ip-overview-row" id="ip-listing-100625">
                            <div class="span12">
                                <div class="span3 ip-overview-img">
                                    <div class="ip-property-thumb-holder">                
                                        <a href="/index.php/propiedades/property/100625-50-la-mata-torrevieja"><img src="imagesProject/a_1_575ff11db78ed_thumb.jpg" alt="Квартира расположена в 50 метрах от Пляжа Ла Маты" class="img-polaroid ip-overview-thumb" /></a>                
                                                    </div>
                                    <h4 class="ip-overview-price pull-right">94.000 €</h4>
                                </div> 
                                <div class="span9 ip-overview-desc">
                                                                        <div class="ip-overview-title">
                                        <a href="/index.php/propiedades/property/100625-50-la-mata-torrevieja" class="ip-property-header-accent">Ti2287 - Квартира расположена в 50 метрах от Пляжа Ла Маты</a>
                                         - Ла Мата (Торревьеха), Alicante Spain<br /><strong>Спальни:</strong> 2 &#160;&#160;<strong>Ванные комнаты:</strong> 2 &#160;&#160;<strong>м<sup>2</sup>:</strong> 65 &#160;&#160;<strong>Регион:</strong> Alicante &#160;&#160;            </div>

                                    <div class="ip-overview-short-desc"> 
                        Numérico: 1095
                        Квартира расположена в 50 метрах от моря, в Ла Мате, в здании есть лифт. Состоит из 2 спален, 2 ванных (...)</div><div class="small">SK inmobiliaria </div><div class="ip-overview-catcontainer"><a class="infoA" href="/index.php/propiedades/cat/2-">Квартира</a></div>        </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>



                        <div class="row-fluid ip-row1 ip-overview-row" id="ip-listing-100883">
                            <div class="span12">
                                <div class="span3 ip-overview-img">
                                    <div class="ip-property-thumb-holder">                
                                        <a href="/index.php/propiedades/property/100883-krasivaya-kvartira-v-mar-azul-vsego-v-150-m-ot-morya-torrevekha"><img src="imagesProject/Sirenito5a699db098375_thumb.jpg" alt="Красивая квартира В MAR AZUL, всего в 150 м от моря" class="img-polaroid ip-overview-thumb" /></a>                
                                                    </div>
                                    <h4 class="ip-overview-price pull-right">94.000 €</h4>
                                </div> 
                                <div class="span9 ip-overview-desc">
                                                                        <div class="ip-overview-title">
                                        <a href="/index.php/propiedades/property/100883-krasivaya-kvartira-v-mar-azul-vsego-v-150-m-ot-morya-torrevekha" class="ip-property-header-accent">Ti2033 - Красивая квартира В MAR AZUL, всего в 150 м от моря</a>
                                         - Торревьеха, Аликанте  Spain<br /><strong>Спальни:</strong> 2 &#160;&#160;<strong>Ванные комнаты:</strong> 1 &#160;&#160;<strong>м<sup>2</sup>:</strong> 50 &#160;&#160;<strong>Регион:</strong> Аликанте &#160;&#160;            </div>

                                    <div class="ip-overview-short-desc">Numérico: 1095
                        Квартира расположена на первом этаже, ориентирована на запад. Находится в прекрасном районе Mar Azul, (...)</div><div class="small">SK inmobiliaria </div><div class="ip-overview-catcontainer"><a class="infoA" href="/index.php/propiedades/cat/2-">Квартира</a></div>        </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>



                        <div class="row-fluid ip-row0 ip-overview-row" id="ip-listing-100899">
                            <div class="span12">
                                <div class="span3 ip-overview-img">
                                    <div class="ip-property-thumb-holder">                
                                        <a href="/index.php/propiedades/property/100899-bungalo-s-bassejnom-v-urbanizatsii-plyazh-la-maty-torrevekha"><img src="imagesProject/foto15a74abefdbdfc_thumb.jpg" alt="Бунгало с Бассейном в Урбанизации, Пляж Ла Маты" class="img-polaroid ip-overview-thumb" /></a>                
                                                    </div>
                                    <h4 class="ip-overview-price pull-right">94.000 €</h4>
                                </div> 
                                <div class="span9 ip-overview-desc">
                                                                        <div class="ip-overview-title">
                                        <a href="/index.php/propiedades/property/100899-bungalo-s-bassejnom-v-urbanizatsii-plyazh-la-maty-torrevekha" class="ip-property-header-accent">Ti2316 - Бунгало с Бассейном в Урбанизации, Пляж Ла Маты</a>
                                         - Торревьеха, Аликанте Spain<br /><strong>Спальни:</strong> 2 &#160;&#160;<strong>Ванные комнаты:</strong> 1 &#160;&#160;<strong>м<sup>2</sup>:</strong> 44 &#160;&#160;<strong>Регион:</strong> Аликанте &#160;&#160;            </div>

                                    <div class="ip-overview-short-desc">Numérico: 1095
                        Бунгало на углу площадью в 44м² расположено в Торревьехе, всего в 600 метрах от прекрасного пляжа Ла (...)</div><div class="small">SK inmobiliaria </div><div class="ip-overview-catcontainer"><a class="infoA" href="/index.php/propiedades/cat/3-bungalow">Бунгало</a></div>        </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>


                        <div class="row-fluid ip-row0 ip-overview-row" id="ip-listing-324">
                            <div class="span12">
                                <div class="span3 ip-overview-img">
                                    <div class="ip-property-thumb-holder">                
                                        <a href="/index.php/propiedades/property/324-apartamento-en-chimos-playa-mar-azul-torrevieja"><img src="imagesProject/553c7d9c970f28_thumb.jpg" alt="Бунгало на Верхнем Этаже с Соляриумом в Mar Azul (Торревьеха)" class="img-polaroid ip-overview-thumb" /></a>                
                                                    </div>
                                    <h4 class="ip-overview-price pull-right">95.000 €</h4>
                                </div> 
                                <div class="span9 ip-overview-desc">
                                                                        <div class="ip-overview-title">
                                        <a href="/index.php/propiedades/property/324-apartamento-en-chimos-playa-mar-azul-torrevieja" class="ip-property-header-accent">Ti3058 - Бунгало на Верхнем Этаже с Соляриумом в Mar Azul (Торревьеха)</a>
                                         - Торревьеха, Аликанте  Spain<br /><strong>Спальни:</strong> 3 &#160;&#160;<strong>Ванные комнаты:</strong> 1 &#160;&#160;<strong>м<sup>2</sup>:</strong> 55 &#160;&#160;<strong>Этаж:</strong> 2 &#160;&#160;            </div>

                                    <div class="ip-overview-short-desc"> 
                        Numérico: 1095
                        Недавно отремонтированный бунгало на верхнем этаже с юго-восточной ориентацией в Мар-Асуле (...)</div><div class="small">SK inmobiliaria </div><div class="ip-overview-catcontainer"><a class="infoA" href="/index.php/propiedades/cat/2-">Квартира</a></div>        </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>



                        <div class="row-fluid ip-row1 ip-overview-row" id="ip-listing-100962">
                            <div class="span12">
                                <div class="span3 ip-overview-img">
                                    <div class="ip-property-thumb-holder">                
                                        <a href="/index.php/propiedades/property/100962-kvartira-vblizi-plyazha-del-cura-torrevekha-torrevekha"><img src="imagesProject/DSC005195ae18dc24bea6_thumb.jpg" alt="Квартира вблизи пляжа Del Cura, Торревьеха" class="img-polaroid ip-overview-thumb" /></a>                
                                                    </div>
                                    <h4 class="ip-overview-price pull-right">95.000 €</h4>
                                </div> 
                                <div class="span9 ip-overview-desc">
                                                                        <div class="ip-overview-title">
                                        <a href="/index.php/propiedades/property/100962-kvartira-vblizi-plyazha-del-cura-torrevekha-torrevekha" class="ip-property-header-accent">Ti3085 - Квартира вблизи пляжа Del Cura, Торревьеха</a>
                                         - Торревьеха, Аликанте Spain<br /><strong>Спальни:</strong> 3 &#160;&#160;<strong>Ванные комнаты:</strong> 2 &#160;&#160;<strong>м<sup>2</sup>:</strong> 105 &#160;&#160;<strong>Этаж:</strong> 1 &#160;&#160;<strong>Регион:</strong> Аликанте &#160;&#160;            </div>

                                    <div class="ip-overview-short-desc">Numérico: 1100
                        Квартира площадью в 105м² расположена в Торревьехе всего в 300 метрах от прекрасных пляжей: Лос Локос (...)</div><div class="small">SK inmobiliaria </div><div class="ip-overview-catcontainer"><a class="infoA" href="/index.php/propiedades/cat/2-">Квартира</a></div>        </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>



                        <div class="row-fluid ip-row0 ip-overview-row" id="ip-listing-100981">
                            <div class="span12">
                                <div class="span3 ip-overview-img">
                                    <div class="ip-property-thumb-holder">                
                                        <a href="/index.php/propiedades/property/100981-prekrasnyj-pentkhaus-vsego-v-100-metrakh-ot-plyazhej-acequi-n-i-n-ufragos-torrevekha-torrevekha"><img src="imagesProject/20160621_110303_-_copia5af5bd5b18794_thumb.jpg" alt="Прекрасный Пентхаус всего в 100 метрах от Пляжей Acequión и Náufragos, Торревьеха " class="img-polaroid ip-overview-thumb" /></a>                
                                    </div>
                                    <h4 class="ip-overview-price pull-right">95.000 €</h4>
                                </div> 
                                <div class="span9 ip-overview-desc">
                                                                        <div class="ip-overview-title">
                                        <a href="/index.php/propiedades/property/100981-prekrasnyj-pentkhaus-vsego-v-100-metrakh-ot-plyazhej-acequi-n-i-n-ufragos-torrevekha-torrevekha" class="ip-property-header-accent">T3322 - Прекрасный Пентхаус всего в 100 метрах от Пляжей Acequión и Náufragos, Торревьеха </a>
                                         - Торревьеха, Аликанте Spain<br /><strong>Спальни:</strong> 3 &#160;&#160;<strong>Ванные комнаты:</strong> 1 &#160;&#160;<strong>м<sup>2</sup>:</strong> 87 &#160;&#160;<strong>Этаж:</strong>  5 &#160;&#160;<strong>Регион:</strong> Аликанте &#160;&#160;            </div>

                                    <div class="ip-overview-short-desc">Numérico: 1100
                        Квартира находится в отличном состоянии на последнем 5м этаже, всего в 100 метрах от пляжей Acequión и (...)</div><div class="small">SK inmobiliaria </div><div class="ip-overview-catcontainer"><a class="infoA" href="/index.php/propiedades/cat/2-">Квартира</a></div>        </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>


                        <div class="row-fluid ip-row0 ip-overview-row" id="ip-listing-100897">
                            <div class="span12">
                                <div class="span3 ip-overview-img">
                                    <div class="ip-property-thumb-holder">                
                                        <a href="/index.php/propiedades/property/100897-tripleks-s-bassejnom-urbanizatsii-v-torreblanka-la-mata-torrevekha"><img src="imagesProject/foto25a7431ca66aea_thumb.jpg" alt="Триплекс с Бассейном Урбанизации в Торребланка, Ла Мата " class="img-polaroid ip-overview-thumb" /></a>                
                                                    </div>
                                    <h4 class="ip-overview-price pull-right">99.000 €</h4>
                                </div> 
                                <div class="span9 ip-overview-desc">
                                                                        <div class="ip-overview-title">
                                        <a href="/index.php/propiedades/property/100897-tripleks-s-bassejnom-urbanizatsii-v-torreblanka-la-mata-torrevekha" class="ip-property-header-accent">Ti3304 - Триплекс с Бассейном Урбанизации в Торребланка, Ла Мата </a>
                                         - Торревьеха, Аликанте Spain<br /><strong>Спальни:</strong> 3 &#160;&#160;<strong>Ванные комнаты:</strong> 2 &#160;&#160;<strong>м<sup>2</sup>:</strong> 56 &#160;&#160;<strong>Этаж:</strong> 3 &#160;&#160;<strong>Регион:</strong> Аликанте &#160;&#160;            </div>

                                    <div class="ip-overview-short-desc">Numérico: 1095
                        Находится на пляже Ла Мата, Торревьеха. Угловой триплекс площадью в 56м² ориентирован на Юго-Запад. (...)</div><div class="small">SK inmobiliaria </div><div class="ip-overview-catcontainer"><a class="infoA" href="/index.php/propiedades/cat/13-duplex">Дуплекс</a></div>        </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>


                        <div class="row-fluid ip-row0 ip-overview-row" id="ip-listing-100959">
                            <div class="span12">
                                <div class="span3 ip-overview-img">
                                    <div class="ip-property-thumb-holder">                
                                        <a href="/index.php/propiedades/property/100959-potryasayushchaya-kvartira-v-los-altos-de-kampoamor-oriuela-kosta-oriuela-kosta"><img src="imagesProject/piscina5ad8cdbb2a548_thumb.jpg" alt="Потрясающая Квартира в Лос Альтос де Кампоамор, Ориуэла Коста" class="img-polaroid ip-overview-thumb" /></a>                
                                                    </div>
                                    <h4 class="ip-overview-price pull-right">99.500 €</h4>
                                </div> 
                                <div class="span9 ip-overview-desc">
                                                                        <div class="ip-overview-title">
                                        <a href="/index.php/propiedades/property/100959-potryasayushchaya-kvartira-v-los-altos-de-kampoamor-oriuela-kosta-oriuela-kosta" class="ip-property-header-accent">Ti2333 - Потрясающая Квартира в Лос Альтос де Кампоамор, Ориуэла Коста</a>
                                         - Ориуэла Коста, Аликанте Spain<br /><strong>Спальни:</strong> 2 &#160;&#160;<strong>Ванные комнаты:</strong> 1 &#160;&#160;<strong>м<sup>2</sup>:</strong> 80 &#160;&#160;<strong>Этаж:</strong>  3 &#160;&#160;<strong>Регион:</strong> Аликанте &#160;&#160;            </div>

                                    <div class="ip-overview-short-desc">Numérico: 1100
                        Квартира расположена на 3м этаже, ориентирована на Юг и находится в Альтос де Кампоамор, Ориуэла (...)</div><div class="small">SK inmobiliaria </div><div class="ip-overview-catcontainer"><a class="infoA" href="/index.php/propiedades/cat/2-">Квартира</a></div>        </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>



                        <div class="row-fluid ip-row1 ip-overview-row" id="ip-listing-101013">
                            <div class="span12">
                                <div class="span3 ip-overview-img">
                                    <div class="ip-property-thumb-holder">                
                                        <a href="/index.php/propiedades/property/101013-dupleks-s-bassejnom-urbanizatsii-v-aguas-nuevas-torrevekha-torrevekha"><img src="imagesProject/175b212d71305c1_thumb.jpg" alt="Дуплекс с Бассейном Урбанизации в Агуас Нуэвас, Торревьеха " class="img-polaroid ip-overview-thumb" /></a>                
                                                    </div>
                                    <h4 class="ip-overview-price pull-right">99.500 €</h4>
                                </div> 
                                <div class="span9 ip-overview-desc">
                                                                        <div class="ip-overview-title">
                                        <a href="/index.php/propiedades/property/101013-dupleks-s-bassejnom-urbanizatsii-v-aguas-nuevas-torrevekha-torrevekha" class="ip-property-header-accent">Ti2353 - Дуплекс с Бассейном Урбанизации в Агуас Нуэвас, Торревьеха </a>
                                         - Торревьеха, Аликанте Spain<br /><strong>Спальни:</strong> 2 &#160;&#160;<strong>Ванные комнаты:</strong> 2 &#160;&#160;<strong>м<sup>2</sup>:</strong> 75 &#160;&#160;<strong>Этаж:</strong> 2 &#160;&#160;<strong>Регион:</strong> Аликанте &#160;&#160;            </div>

                                    <div class="ip-overview-short-desc">Numérico: 1100
                        Потрясающий дуплекс площадью в 75м² состоит из 2х этажей и находится в урбанизации Агуас Нуэвас, (...)</div><div class="small">SK inmobiliaria </div><div class="ip-overview-catcontainer"><a class="infoA" href="/index.php/propiedades/cat/13-duplex">Дуплекс</a></div>        </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>



                        <div class="row-fluid ip-row0 ip-overview-row" id="ip-listing-101055">
                            <div class="span12">
                                <div class="span3 ip-overview-img">
                                    <div class="ip-property-thumb-holder">                
                                        <a href="/index.php/propiedades/property/101055-prekrasnyj-bungalo-nizhnij-etazh-v-los-frutales-los-frutales-torrevekha-torrevekha"><img src="imagesProject/35b7fc1d5d3359_thumb.jpg" alt="Прекрасный Бунгало Нижний Этаж в Лос Фруталес (Los Frutales), Торревьеха" class="img-polaroid ip-overview-thumb" /></a>                
                                                    </div>
                                    <h4 class="ip-overview-price pull-right">99.500 €</h4>
                                </div> 
                                <div class="span9 ip-overview-desc">
                                                                        <div class="ip-overview-title">
                                        <a href="/index.php/propiedades/property/101055-prekrasnyj-bungalo-nizhnij-etazh-v-los-frutales-los-frutales-torrevekha-torrevekha" class="ip-property-header-accent">Ti2357 - Прекрасный Бунгало Нижний Этаж в Лос Фруталес (Los Frutales), Торревьеха</a>
                                         - Торревьеха, Аликанте Spain<br /><strong>Спальни:</strong> 2 &#160;&#160;<strong>Ванные комнаты:</strong> 1 &#160;&#160;<strong>м<sup>2</sup>:</strong> 70 &#160;&#160;<strong>Этаж:</strong> Нижний этаж &#160;&#160;<strong>м<sup>2</sup> участка:</strong> 100,00 &#160;&#160;<strong>Регион:</strong> Аликанте &#160;&#160;            </div>

                                    <div class="ip-overview-short-desc">Numérico: 1100
                        Прекрасный бунгало на нижнем этаже в Лос Фруталес, практически 2 линия моря. Жилье площадью в 70м² (...)</div><div class="small">SK inmobiliaria </div><div class="ip-overview-catcontainer"><a class="infoA" href="/index.php/propiedades/cat/3-bungalow">Бунгало</a></div>        </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>



                        <div class="row-fluid ip-row1 ip-overview-row" id="ip-listing-100645">
                            <div class="span12">
                                <div class="span3 ip-overview-img">
                                    <div class="ip-property-thumb-holder">                
                                        <a href="/index.php/propiedades/property/100645-1286963571"><img src="imagesProject/Apto_Edf_Sinaloa_3_57714693ab657_thumb.jpg" alt="Квартира c 2мя Гаражами Расположена между Морем и Лагуной Ла Маты с Прекрасным Видом  на Лагуну" class="img-polaroid ip-overview-thumb" /></a>                
                                                    </div>
                                    <h4 class="ip-overview-price pull-right"><span class="slashprice">129.000 €</span> <span class="ip-newprice">106.000 €</span></h4>
                                </div> 
                                <div class="span9 ip-overview-desc">
                                                                        <div class="ip-overview-title">
                                        <a href="/index.php/propiedades/property/100645-1286963571" class="ip-property-header-accent">Ti2296 - Квартира c 2мя Гаражами Расположена между Морем и Лагуной Ла Маты с Прекрасным Видом  на Лагуну</a>
                                         - Ла Мата (Торревьеха), Аликанте Spain<br /><strong>Спальни:</strong> 2 &#160;&#160;<strong>Ванные комнаты:</strong> 1 &#160;&#160;<strong>м<sup>2</sup>:</strong> 66 &#160;&#160;<strong>Этаж:</strong>  5 &#160;&#160;<strong>Регион:</strong> Аликанте &#160;&#160;            </div>

                                    <div class="ip-overview-short-desc"> Numérico: 1095
                        Квартира расположена на 5º этаже в резиденции Калифорния II (California II), в потрясающем месте между (...)</div><div class="small">SK inmobiliaria </div><div class="ip-overview-catcontainer"><a class="infoA" href="/index.php/propiedades/cat/2-">Квартира</a></div>        </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="row-fluid ip-row0 ip-overview-row" id="ip-listing-100798">
                            <div class="span12">
                                <div class="span3 ip-overview-img">
                                    <div class="ip-property-thumb-holder">                
                                        <a href="/index.php/propiedades/property/100798-potryasayushchie-bungalo-s-vidom-na-skalu-pinon-de-ifach-3-spalni-kalpe-kalpe"><img src="imagesProject/Adosados_Puerta_del_Sol_Calpe_1_5832e7f839f31_thumb.jpg" alt="Потрясающие Бунгало с Видом на Скалу Пиньон де Ифач, 3 Спальни, Кальпе " class="img-polaroid ip-overview-thumb" /></a>                
                                                    </div>
                                    <h4 class="ip-overview-price pull-right">195.000 €</h4>
                                </div> 
                                <div class="span9 ip-overview-desc">
                                                                        <div class="ip-overview-title">
                                        <a href="/index.php/propiedades/property/100798-potryasayushchie-bungalo-s-vidom-na-skalu-pinon-de-ifach-3-spalni-kalpe-kalpe" class="ip-property-header-accent">Ti3022 - Потрясающие Бунгало с Видом на Скалу Пиньон де Ифач, 3 Спальни, Кальпе </a>
                                         - Кальпе, Аликанте Spain<br /><strong>Спальни:</strong> 3 &#160;&#160;<strong>Ванные комнаты:</strong> 2 &#160;&#160;<strong>M<sup>2</sup>:</strong> 137 &#160;&#160;<strong>Регион:</strong> Аликанте &#160;&#160;            </div>

                                    <div class="ip-overview-short-desc"> 
                        Numérico: 1095
                        Бунгало расположены в закрытой урбанизации в Кальпе. Всего 35 бунгало с видом на знаменитую скалу (...)</div><div class="small">SK inmobiliaria </div><div class="ip-overview-catcontainer"><a href="/index.php/propiedades/cat/3-bungalow">Бунгало</a></div>        </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>



                        <div class="row-fluid ip-row1 ip-overview-row" id="ip-listing-101048">
                            <div class="span12">
                                <div class="span3 ip-overview-img">
                                    <div class="ip-property-thumb-holder">                
                                        <a href="/index.php/propiedades/property/101048-novaya-rezidentsiya-iz-9-otdelnykh-vill-v-rokhales-syudad-kesada-rokhales"><img src="imagesProject/VIV_3D_NUEVA5b6424eb576b0_thumb.jpg" alt="Новая Резиденция из 9 Отдельных Вилл в Рохалес, Браво" class="img-polaroid ip-overview-thumb" /></a>                
                                                    </div>
                                    <h4 class="ip-overview-price pull-right">199.500 €</h4>
                                </div> 
                                <div class="span9 ip-overview-desc">
                                                                        <div class="ip-overview-title">
                                        <a href="/index.php/propiedades/property/101048-novaya-rezidentsiya-iz-9-otdelnykh-vill-v-rokhales-syudad-kesada-rokhales" class="ip-property-header-accent">Ti2065 - Новая Резиденция из 9 Отдельных Вилл в Рохалес, Браво</a>
                                         - Рохалес, Аликанте Spain<br /><strong>Спальни:</strong> 2 &#160;&#160;<strong>Ванные комнаты:</strong> 2 &#160;&#160;<strong>M<sup>2</sup>:</strong> 77 &#160;&#160;<strong>Pisos:</strong> 2 &#160;&#160;<strong>M<sup>2</sup> участка:</strong> 150,00 &#160;&#160;<strong>Регион:</strong> Аликанте &#160;&#160;            </div>

                                    <div class="ip-overview-short-desc">Numérico: 1100
                        Новая резиденция состоит из 9 отдельных вилл и находится в Рохалес, Браво. Виллы состоят из 2/3 (...)</div><div class="small">SK inmobiliaria </div><div class="ip-overview-catcontainer"><a href="/index.php/propiedades/cat/5-villa">Вилла</a></div>        </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>



                        <div class="row-fluid ip-row0 ip-overview-row" id="ip-listing-96">
                            <div class="span12">
                                <div class="span3 ip-overview-img">
                                    <div class="ip-property-thumb-holder">                
                                        <a href="/index.php/propiedades/property/96-duplex-laguna-violeta-torrevieja"><img src="imagesProject/mini_il5jNPGASMTTWfHtRrjiXODK1cOseNNstY4EBVc0qeY537a1451b64d0_thumb.jpg" alt="Угловой дуплекс в красивом тихом жилом районе Laguna Violeta" class="img-polaroid ip-overview-thumb" /></a>                
                                                    </div>
                                    <h4 class="ip-overview-price pull-right">199.900 €</h4>
                                </div> 
                                <div class="span9 ip-overview-desc">
                                                                        <div class="ip-overview-title">
                                        <a href="/index.php/propiedades/property/96-duplex-laguna-violeta-torrevieja" class="ip-property-header-accent">Ti2034 - Угловой дуплекс в красивом тихом жилом районе Laguna Violeta</a>
                                         - Торревьеха, Аликанте  Spain<br /><strong>Спальни:</strong> 2 &#160;&#160;<strong>Ванные комнаты:</strong> 2 &#160;&#160;<strong>M<sup>2</sup>:</strong> 82 &#160;&#160;<strong>M<sup>2</sup> участка:</strong> 210,00 &#160;&#160;            </div>

                                    <div class="ip-overview-short-desc"> 
                        Numérico: 1095
                        Угловой дуплекс расположен в хорошем тихом жилом районе недалеко от Лос-Balcones Торревьеха. (...)</div><div class="small">SK inmobiliaria </div><div class="ip-overview-catcontainer"><a href="/index.php/propiedades/cat/13-duplex">Дуплекс</a></div>        </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>



                        <div class="row-fluid ip-row1 ip-overview-row" id="ip-listing-100753">
                            <div class="span12">
                                <div class="span3 ip-overview-img">
                                    <div class="ip-property-thumb-holder">                
                                        <a href="/index.php/propiedades/property/100753-600"><img src="imagesProject/_DSC074557eb993c0fc3d_thumb.jpg" alt="Фантастический Дом со Смежной Стеной всего в 600 метрах от Пляжа Ла Маты" class="img-polaroid ip-overview-thumb" /></a>                
                                                    </div>
                                    <h4 class="ip-overview-price pull-right">215.000 €</h4>
                                </div> 
                                <div class="span9 ip-overview-desc">
                                                                        <div class="ip-overview-title">
                                        <a href="/index.php/propiedades/property/100753-600" class="ip-property-header-accent">Ti3388 - Фантастический Дом со Смежной Стеной всего в 600 метрах от Пляжа Ла Маты</a>
                                         - Ла Мата (Торревьеха), Аликанте Spain<br /><strong>Спальни:</strong> 2 &#160;&#160;<strong>Ванные комнаты:</strong> 2 &#160;&#160;<strong>M<sup>2</sup>:</strong> 95 &#160;&#160;<strong>Регион:</strong> Аликанте &#160;&#160;            </div>

                                    <div class="ip-overview-short-desc"> Numérico: 1095
                        Триплекс со смежной стеной расположен всего в 600 метрах от пляжа Ла Маты. Состоит из 3 спален, 1 (...)</div><div class="small">SK inmobiliaria </div><div class="ip-overview-catcontainer"><a href="/index.php/propiedades/cat/13-duplex">Дуплекс</a></div>        </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>


                        <div class="row-fluid ip-row1 ip-overview-row" id="ip-listing-100570">
                            <div class="span12">
                                <div class="span3 ip-overview-img">
                                    <div class="ip-property-thumb-holder">                
                                        <a href="/index.php/propiedades/property/100570-novyj-proekt-villy-v-benikhofar-benijofar-benikhofar"><img src="imagesProject/Fotos_Ti3267__2_572b4bfc2493e_thumb.jpg" alt="Новый Проект - Виллы в Бенихофар (Benijofar)" class="img-polaroid ip-overview-thumb" /></a>                
                                                    </div>
                                    <h4 class="ip-overview-price pull-right">224.500 €</h4>
                                </div> 
                                <div class="span9 ip-overview-desc">
                                                                        <div class="ip-overview-title">
                                        <a href="/index.php/propiedades/property/100570-novyj-proekt-villy-v-benikhofar-benijofar-benikhofar" class="ip-property-header-accent">Ti3267 - Новый Проект - Виллы в Бенихофар (Benijofar)</a>
                                         - Бенихофар, Аликанте Spain<br /><strong>Спальни:</strong> 3 &#160;&#160;<strong>Ванные комнаты:</strong> 2 &#160;&#160;<strong>M<sup>2</sup>:</strong> 172 &#160;&#160;<strong>M<sup>2</sup> участка:</strong> 200,00 &#160;&#160;<strong>Регион:</strong> Аликанте &#160;&#160;            </div>

                                    <div class="ip-overview-short-desc">Numérico: 1095
                        Новый проект включает в себя 16 вилл, состоящих из 3 спален и 2 ванных комнат, расположеных в лучшей (...)</div><div class="small">SK inmobiliaria </div><div class="ip-overview-catcontainer"><a href="/index.php/propiedades/cat/5-villa">Вилла</a></div>        </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>



                        <div class="row-fluid ip-row0 ip-overview-row" id="ip-listing-101007">
                            <div class="span12">
                                <div class="span3 ip-overview-img">
                                    <div class="ip-property-thumb-holder">                
                                        <a href="/index.php/propiedades/property/101007-potryasayushchij-dom-v-avileses-mursiya-mursiya"><img src="imagesProject/slide0001_image0015b16b2edc03db_thumb.jpg" alt="Потрясающий Дом в Авилесес, Мурсия" class="img-polaroid ip-overview-thumb" /></a>                
                                                    </div>
                                    <h4 class="ip-overview-price pull-right">224.900 €</h4>
                                </div> 
                                <div class="span9 ip-overview-desc">
                                                                        <div class="ip-overview-title">
                                        <a href="/index.php/propiedades/property/101007-potryasayushchij-dom-v-avileses-mursiya-mursiya" class="ip-property-header-accent">Ti5303 - Потрясающий Дом в Авилесес, Мурсия</a>
                                         - Мурсия, Мурсия Spain<br /><strong>Спальни:</strong> 5 &#160;&#160;<strong>Ванные комнаты:</strong> 3 &#160;&#160;<strong>M<sup>2</sup>:</strong> 190 &#160;&#160;<strong>Pisos:</strong> 2 &#160;&#160;<strong>M<sup>2</sup> участка:</strong> 350,00 &#160;&#160;<strong>Регион:</strong> Мурсия &#160;&#160;            </div>

                                    <div class="ip-overview-short-desc">Numérico: 1100
                        Потрясающий дом находится в Авилесес, Мурсия. Дом площадью в 190м² расположен на участке 350м² и (...)</div><div class="small">SK inmobiliaria </div><div class="ip-overview-catcontainer"><a href="/index.php/propiedades/cat/5-villa">Вилла</a></div>        </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>


                        <div class="row-fluid ip-row0 ip-overview-row" id="ip-listing-100919">
                            <div class="span12">
                                <div class="span3 ip-overview-img">
                                    <div class="ip-property-thumb-holder">                
                                        <a href="/index.php/propiedades/property/100919-prekrasnaya-rezidentsiya-novykh-vill-v-san-pedro-de-pinatar-mursiya-mursiya"><img src="imagesProject/1518715691_tmp_DSC_00155a85c7a16b20a_thumb.jpg" alt="Прекрасная Резиденция Новых Вилл в Сан Педро де Пинатар, Мурсия" class="img-polaroid ip-overview-thumb" /></a>                
                                                    </div>
                                    <h4 class="ip-overview-price pull-right">229.000 €</h4>
                                </div> 
                                <div class="span9 ip-overview-desc">
                                                                        <div class="ip-overview-title">
                                        <a href="/index.php/propiedades/property/100919-prekrasnaya-rezidentsiya-novykh-vill-v-san-pedro-de-pinatar-mursiya-mursiya" class="ip-property-header-accent">Ti3046 - Прекрасная Резиденция Новых Вилл в Сан Педро де Пинатар, Мурсия</a>
                                         - Мурсия, Мурсия Spain<br /><strong>Спальни:</strong> 3 &#160;&#160;<strong>Ванные комнаты:</strong> 2 &#160;&#160;<strong>M<sup>2</sup>:</strong> 109 &#160;&#160;<strong>Pisos:</strong> 2 &#160;&#160;<strong>M<sup>2</sup> участка:</strong> 92,00 &#160;&#160;<strong>Регион:</strong> Мурсия &#160;&#160;            </div>

                                    <div class="ip-overview-short-desc">Numérico: 1100
                        Резиденция находится в провинции Сан Педро де Пинатар, близко к центру, парку и колледжу, а также к (...)</div><div class="small">SK inmobiliaria </div><div class="ip-overview-catcontainer"><a href="/index.php/propiedades/cat/5-villa">Вилла</a></div>        </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>



                        <div class="row-fluid ip-row1 ip-overview-row" id="ip-listing-101039">
                            <div class="span12">
                                <div class="span3 ip-overview-img">
                                    <div class="ip-property-thumb-holder">                
                                        <a href="/index.php/propiedades/property/101039-novaya-rezidentsiya-iz-otdelnykh-vill-s-lichnym-bassejnom-v-rokhales-syudad-kesada-syudad-kesada"><img src="imagesProject/tn_SWING_RENDER5b471e9222cb9_thumb.jpg" alt="Новая Резиденция из Отдельных Вилл с Личным Бассейном в Рохалес, Сьюдад Кесада" class="img-polaroid ip-overview-thumb" /></a>                
                                                    </div>
                                    <h4 class="ip-overview-price pull-right">229.900 €</h4>
                                </div> 
                                <div class="span9 ip-overview-desc">
                                                                        <div class="ip-overview-title">
                                        <a href="/index.php/propiedades/property/101039-novaya-rezidentsiya-iz-otdelnykh-vill-s-lichnym-bassejnom-v-rokhales-syudad-kesada-syudad-kesada" class="ip-property-header-accent">Ti2010 - Новая Резиденция из Отдельных Вилл с Личным Бассейном в Рохалес, Сьюдад Кесада</a>
                                         - Рохалес, Аликанте Spain<br /><strong>Спальни:</strong> 2 &#160;&#160;<strong>Ванные комнаты:</strong> 2 &#160;&#160;<strong>M<sup>2</sup>:</strong> 125 &#160;&#160;<strong>Pisos:</strong> 2 &#160;&#160;<strong>M<sup>2</sup> участка:</strong> 198,00 &#160;&#160;<strong>Регион:</strong> Аликанте &#160;&#160;            </div>

                                    <div class="ip-overview-short-desc">Numérico: 1100
                        Новая резиденция находится в Рохалес, в самом престижном районе с потрясающим видом на берег (...)</div><div class="small">SK inmobiliaria </div><div class="ip-overview-catcontainer"><a href="/index.php/propiedades/cat/5-villa">Вилла</a></div>        </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>



                        <div class="row-fluid ip-row0 ip-overview-row" id="ip-listing-100910">
                            <div class="span12">
                                <div class="span3 ip-overview-img">
                                    <div class="ip-property-thumb-holder">                
                                        <a href="/index.php/propiedades/property/100910-rezidentsiya-klassa-lyuks-prekrasnye-villy-s-lichnym-bassejnom-v-los-alc-zares-mursiya"><img src="imagesProject/Vista_piscina_dia_C5a7d5c5aaa48d_thumb.jpg" alt="Резиденция Класса Люкс, Прекрасные Виллы с Личным Бассейном в Los Alcázares" class="img-polaroid ip-overview-thumb" /></a>                
                                                    </div>
                                    <h4 class="ip-overview-price pull-right">230.000 €</h4>
                                </div> 
                                <div class="span9 ip-overview-desc">
                                                                        <div class="ip-overview-title">
                                        <a href="/index.php/propiedades/property/100910-rezidentsiya-klassa-lyuks-prekrasnye-villy-s-lichnym-bassejnom-v-los-alc-zares-mursiya" class="ip-property-header-accent">Ti3041 - Резиденция Класса Люкс, Прекрасные Виллы с Личным Бассейном в Los Alcázares</a>
                                         - Мурсия, Аликанте Spain<br /><strong>Спальни:</strong> 3 &#160;&#160;<strong>Ванные комнаты:</strong> 2 &#160;&#160;<strong>M<sup>2</sup>:</strong> 90 &#160;&#160;<strong>Регион:</strong> Аликанте &#160;&#160;            </div>

                                    <div class="ip-overview-short-desc">Numérico: 1100
                        Данная Резиденция класса люкс включает в себя 39 вилл с личным бассейном, расположена в Los Alcázares. (...)</div><div class="small">SK inmobiliaria </div><div class="ip-overview-catcontainer"><a href="/index.php/propiedades/cat/5-villa">Вилла</a><span class="ip-cat-icon-divider">&#160;</span></div>        </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>



                        <div class="row-fluid ip-row1 ip-overview-row" id="ip-listing-100921">
                            <div class="span12">
                                <div class="span3 ip-overview-img">
                                    <div class="ip-property-thumb-holder">                
                                        <a href="/index.php/propiedades/property/100921-villy-novogo-stroitelstva-v-los-alkasares-mursiya-costa-c-lida-mursiya742358494"><img src="imagesProject/Infografias_7_5a87fdfbbd8f0_thumb.jpg" alt="Виллы Нового Строительства в Лос Алкасарес, Мурсия, Costa Cálida" class="img-polaroid ip-overview-thumb" /></a>                
                                                    </div>
                                    <h4 class="ip-overview-price pull-right">230.000 €</h4>
                                </div> 
                                <div class="span9 ip-overview-desc">
                                                                        <div class="ip-overview-title">
                                        <a href="/index.php/propiedades/property/100921-villy-novogo-stroitelstva-v-los-alkasares-mursiya-costa-c-lida-mursiya742358494" class="ip-property-header-accent">Ti3047 - Виллы Нового Строительства в Лос Алкасарес, Мурсия, Costa Cálida</a>
                                         - Мурсия, Мурсия Spain<br /><strong>Спальни:</strong> 3 &#160;&#160;<strong>Ванные комнаты:</strong> 2 &#160;&#160;<strong>M<sup>2</sup>:</strong> 97 &#160;&#160;<strong>Pisos:</strong> 2 &#160;&#160;<strong>M<sup>2</sup> участка:</strong> 200,00 &#160;&#160;<strong>Регион:</strong> Мурсия &#160;&#160;            </div>

                                    <div class="ip-overview-short-desc">Numérico: 1100
                        Индивидуальная Вилла 97м² расположена на участке площадью в 200м² в Лос Алкасарес (Мурсия), всего в 300 (...)</div><div class="small">SK inmobiliaria </div><div class="ip-overview-catcontainer"><a href="/index.php/propiedades/cat/5-villa">Вилла</a></div>        </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>


                        <div class="row-fluid ip-row0 ip-overview-row" id="ip-listing-100925">
                            <div class="span12">
                                <div class="span3 ip-overview-img">
                                    <div class="ip-property-thumb-holder">                
                                        <a href="/index.html/propiedades/property/100925-prekrasnaya-otdelnaya-villa-novogo-stroitelstva-v-ciudad-quesada-syudad-kesada"><img src="/media/com_iproperty/pictures/Alicia_1_web5a8db03d0d779_thumb.jpg" alt="Прекрасная Отдельная Вилла Нового Строительства в Ciudad Quesada" class="img-polaroid ip-overview-thumb" /></a>                
                                                    </div>
                                    <h4 class="ip-overview-price pull-right">336.370 €</h4>
                                </div> 
                                <div class="span9 ip-overview-desc">
                                                                        <div class="ip-overview-title">
                                        <a href="/index.html/propiedades/property/100925-prekrasnaya-otdelnaya-villa-novogo-stroitelstva-v-ciudad-quesada-syudad-kesada" class="ip-property-header-accent">Ti3054 - Прекрасная Отдельная Вилла Нового Строительства в Ciudad Quesada</a>
                                         - Сьюдад Кесада, Аликанте Spain<br /><strong>Спальни:</strong> 3 &#160;&#160;<strong>Ванные комнаты:</strong> 3 &#160;&#160;<strong>M<sup>2</sup>:</strong> 121 &#160;&#160;<strong>Pisos:</strong> 2 &#160;&#160;<strong>M<sup>2</sup> участка:</strong> от 345м² &#160;&#160;<strong>Регион:</strong> Аликанте &#160;&#160;            </div>

                                    <div class="ip-overview-short-desc">Numérico: 1100
                        Прекрасная отдельная вилла нового строительства состоит из 3 спален, 3 ванных комнат. Выполнена в (...)</div><div class="small">Titanium Properties </div><div class="ip-overview-catcontainer"><a href="/index.html/propiedades/cat/5-villa">Вилла</a><span class="ip-cat-icon-divider">&#160;</span></div>        </div>
                            </div>
                        </div>


                        <div class="row-fluid ip-row1 ip-overview-row" id="ip-listing-100612">
                            <div class="span12">
                                <div class="span3 ip-overview-img">
                                    <div class="ip-property-thumb-holder">                
                                        <a href="/index.html/propiedades/property/100612-chalet-so-smezhnoj-stenoj-s-lichnym-bassejnom-v-150m-ot-plyazha-los-frutales-torrevekha-torrevekha"><img src="/media/com_iproperty/pictures/o_1bp8hnpe5pothdc1muc1tf41arn37_1024x8005a6764b9d905f_thumb.jpg" alt="Чалет со Смежной Стеной, с Личным Бассейном в 150м от Пляжа - Лос Фруталес, Торревьеха @" class="img-polaroid ip-overview-thumb" /></a>                
                                                    </div>
                                    <h4 class="ip-overview-price pull-right">340.000 €</h4>
                                </div> 
                                <div class="span9 ip-overview-desc">
                                                                        <div class="ip-overview-title">
                                        <a href="/index.html/propiedades/property/100612-chalet-so-smezhnoj-stenoj-s-lichnym-bassejnom-v-150m-ot-plyazha-los-frutales-torrevekha-torrevekha" class="ip-property-header-accent">Ti3278 - Чалет со Смежной Стеной, с Личным Бассейном в 150м от Пляжа - Лос Фруталес, Торревьеха @</a>
                                         - Торревьеха, Аликанте Spain<br /><strong>Спальни:</strong> 3 &#160;&#160;<strong>Ванные комнаты:</strong> 3 &#160;&#160;<strong>M<sup>2</sup>:</strong> 172 &#160;&#160;<strong>M<sup>2</sup> участка:</strong> 200,00 &#160;&#160;<strong>Регион:</strong> Аликанте &#160;&#160;            </div>

                                    <div class="ip-overview-short-desc"> Numérico: 1095
                        Дом расположен на угловом участке, площадью в 200м². Расположение Южное. На территории дома есть (...)</div><div class="small">Titanium Properties </div><div class="ip-overview-catcontainer"><a href="/index.html/propiedades/cat/5-villa">Вилла</a></div>        </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>



                        <div class="row-fluid ip-row0 ip-overview-row" id="ip-listing-101044">
                            <div class="span12">
                                <div class="span3 ip-overview-img">
                                    <div class="ip-property-thumb-holder">                
                                        <a href="/index.html/propiedades/property/101044-novoe-stroitelstvo-vill-klassa-lyuks-v-torreta-florida-torrevekha-torrevekha"><img src="/media/com_iproperty/pictures/tn_EXTERIOR_DEFINITIVO5b56ed605c058_thumb.jpg" alt="Новое Строительство Вилл Класса Люкс в Торрета Флорида, Торревьеха" class="img-polaroid ip-overview-thumb" /></a>                
                                                    </div>
                                    <h4 class="ip-overview-price pull-right">340.000 €</h4>
                                </div> 
                                <div class="span9 ip-overview-desc">
                                                                        <div class="ip-overview-title">
                                        <a href="/index.html/propiedades/property/101044-novoe-stroitelstvo-vill-klassa-lyuks-v-torreta-florida-torrevekha-torrevekha" class="ip-property-header-accent">Ti3112 - Новое Строительство Вилл Класса Люкс в Торрета Флорида, Торревьеха</a>
                                         - Торревьеха, Аликанте Spain<br /><strong>Спальни:</strong> 3 &#160;&#160;<strong>Ванные комнаты:</strong> 2 &#160;&#160;<strong>M<sup>2</sup>:</strong> 117 &#160;&#160;<strong>Pisos:</strong> 1 &#160;&#160;<strong>M<sup>2</sup> участка:</strong> 400,00 &#160;&#160;<strong>Регион:</strong> Аликанте &#160;&#160;            </div>

                                    <div class="ip-overview-short-desc">Numérico: 1100
                        Новое строительство 4 вилл находится в потрясающей урбанизации Торрета Флорида в Торревьехе. Дома (...)</div><div class="small">Titanium Properties </div><div class="ip-overview-catcontainer"><a href="/index.html/propiedades/cat/14-obra-nueva">Новостройка</a><span class="ip-cat-icon-divider">&#160;</span><a href="/index.html/propiedades/cat/5-villa">Вилла</a><span class="ip-cat-icon-divider">&#160;</span></div>        </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>


                        <div class="row-fluid ip-row0 ip-overview-row" id="ip-listing-101017">
                            <div class="span12">
                                <div class="span3 ip-overview-img">
                                    <div class="ip-property-thumb-holder">                
                                        <a href="/index.html/propiedades/property/101017-otdelnye-villy-novostrojki-s-lichnym-bassejnom-i-garazhem-v-los-altos-torrevekha-oriuela-kosta"><img src="/media/com_iproperty/pictures/tn_FOTOS_6_5b24da3459cd0_thumb.jpg" alt="Отдельные Виллы Новостройки с Личным Бассейном и Гаражем в Лос Альтос, Ориуэла Коста" class="img-polaroid ip-overview-thumb" /></a>                
                                                    </div>
                                    <h4 class="ip-overview-price pull-right">369.000 €</h4>
                                </div> 
                                <div class="span9 ip-overview-desc">
                                                                        <div class="ip-overview-title">
                                        <a href="/index.html/propiedades/property/101017-otdelnye-villy-novostrojki-s-lichnym-bassejnom-i-garazhem-v-los-altos-torrevekha-oriuela-kosta" class="ip-property-header-accent">Ti3097 - Отдельные Виллы Новостройки с Личным Бассейном и Гаражем в Лос Альтос, Ориуэла Коста</a>
                                         - Ориуэла Коста, Аликанте Spain<br /><strong>Спальни:</strong> 3 &#160;&#160;<strong>Ванные комнаты:</strong> 2 &#160;&#160;<strong>M<sup>2</sup>:</strong> 213 &#160;&#160;<strong>Регион:</strong> Аликанте &#160;&#160;            </div>

                                    <div class="ip-overview-short-desc">Numérico: 1100
                        Резиденция состоит из 22 отдельных виллс личным бассейном и парковочным местом. Находятся в (...)</div><div class="small">Titanium Properties </div><div class="ip-overview-catcontainer"><a href="/index.html/propiedades/cat/11-chalet">Отдельностоящий дом</a><span class="ip-cat-icon-divider">&#160;</span><a href="/index.html/propiedades/cat/5-villa">Вилла</a><span class="ip-cat-icon-divider">&#160;</span></div>        </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>



                        <div class="row-fluid ip-row1 ip-overview-row" id="ip-listing-101041">
                            <div class="span12">
                                <div class="span3 ip-overview-img">
                                    <div class="ip-property-thumb-holder">                
                                        <a href="/index.html/propiedades/property/101041-otdelnaya-villa-v-san-fulgensio-s-lichnym-bassejnom-la-marina-la-marina"><img src="/media/com_iproperty/pictures/tn_IMG_0134-25b487be05bba8_thumb.jpg" alt="Отдельная Вилла в Сан Фульгенсио с Личным Бассейном (La Marina)" class="img-polaroid ip-overview-thumb" /></a>                
                                                    </div>
                                    <h4 class="ip-overview-price pull-right">380.000 €</h4>
                                </div> 
                                <div class="span9 ip-overview-desc">
                                                                        <div class="ip-overview-title">
                                        <a href="/index.html/propiedades/property/101041-otdelnaya-villa-v-san-fulgensio-s-lichnym-bassejnom-la-marina-la-marina" class="ip-property-header-accent">Ti3108 - Отдельная Вилла в Сан Фульгенсио с Личным Бассейном (La Marina)</a>
                                         - Ла Марина, Аликанте Spain<br /><strong>Спальни:</strong> 3 &#160;&#160;<strong>Ванные комнаты:</strong> 2 &#160;&#160;<strong>M<sup>2</sup>:</strong> 150 &#160;&#160;<strong>Pisos:</strong> 1 &#160;&#160;<strong>M<sup>2</sup> участка:</strong> 500,00 &#160;&#160;<strong>Регион:</strong> Аликанте &#160;&#160;            </div>

                                    <div class="ip-overview-short-desc">Numérico: 1100
                        Отдельнгая вилла очень просторная и наполнена естественным светом благодаря панорамным окнам. (...)</div><div class="small">Titanium Properties </div><div class="ip-overview-catcontainer"><a href="/index.html/propiedades/cat/5-villa">Вилла</a><span class="ip-cat-icon-divider">&#160;</span></div>        </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>


                        <div class="row-fluid ip-row0 ip-overview-row" id="ip-listing-100918">
                            <div class="span12">
                                <div class="span3 ip-overview-img">
                                    <div class="ip-property-thumb-holder">                
                                        <a href="/index.html/propiedades/property/100918-prekrasnaya-villa-s-lichnym-bassejnom-v-la-manga-la-manga"><img src="/media/com_iproperty/pictures/manga_345a859ed86caab_thumb.jpg" alt="Прекрасная Вилла с Личным Бассейном в Ла Манга" class="img-polaroid ip-overview-thumb" /></a>                
                                                    </div>
                                    <h4 class="ip-overview-price pull-right">395.000 €</h4>
                                </div> 
                                <div class="span9 ip-overview-desc">
                                                                        <div class="ip-overview-title">
                                        <a href="/index.html/propiedades/property/100918-prekrasnaya-villa-s-lichnym-bassejnom-v-la-manga-la-manga" class="ip-property-header-accent">Ti3053 - Прекрасная Вилла с Личным Бассейном в Ла Манга</a>
                                         - Ла Манга, Мурсия Spain<br /><strong>Спальни:</strong> 3 &#160;&#160;<strong>Ванные комнаты:</strong> 1 &#160;&#160;<strong>M<sup>2</sup>:</strong> 220 &#160;&#160;<strong>Pisos:</strong> 3 &#160;&#160;<strong>M<sup>2</sup> участка:</strong> 850,00 &#160;&#160;<strong>Регион:</strong> Мурсия &#160;&#160;            </div>

                                    <div class="ip-overview-short-desc">Numérico: 1100
                        Прекрасная вилла состоит из 3х этажей, находится в отличном состоянии и включает в себя 3 спальни и 3 (...)</div><div class="small">Titanium Properties </div><div class="ip-overview-catcontainer"><a href="/index.html/propiedades/cat/5-villa">Вилла</a><span class="ip-cat-icon-divider">&#160;</span></div>        </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>


                        <div class="row-fluid ip-row0 ip-overview-row" id="ip-listing-100922">
                            <div class="span12">
                                <div class="span3 ip-overview-img">
                                    <div class="ip-property-thumb-holder">                
                                        <a href="/index.html/propiedades/property/100922-prekrasnye-villy-novogo-stroitelstva-s-lichnym-bassjnom-na-pervoj-linii-golf-polej-v-san-khaver-mursiya-mursiya"><img src="/media/com_iproperty/pictures/Imagen_Mayo_2016_55a881002a2e6c_thumb.jpg" alt="Виллы Нового Строительства с Личным Бассйном, Первая Линия Гольф Полей в Сан Хавьер, Мурсия" class="img-polaroid ip-overview-thumb" /></a>                
                                                    </div>
                                    <h4 class="ip-overview-price pull-right">400.000 €</h4>
                                </div> 
                                <div class="span9 ip-overview-desc">
                                                                        <div class="ip-overview-title">
                                        <a href="/index.html/propiedades/property/100922-prekrasnye-villy-novogo-stroitelstva-s-lichnym-bassjnom-na-pervoj-linii-golf-polej-v-san-khaver-mursiya-mursiya" class="ip-property-header-accent">Ti3043 - Виллы Нового Строительства с Личным Бассйном, Первая Линия Гольф Полей в Сан Хавьер, Мурсия</a>
                                         - Мурсия, Мурсия Spain<br /><strong>Спальни:</strong> 3 &#160;&#160;<strong>Ванные комнаты:</strong> 2 &#160;&#160;<strong>M<sup>2</sup>:</strong> 135 &#160;&#160;<strong>Pisos:</strong> 1 &#160;&#160;<strong>M<sup>2</sup> участка:</strong> 300,00 &#160;&#160;<strong>Регион:</strong> Мурсия &#160;&#160;            </div>

                                    <div class="ip-overview-short-desc">Numérico: 1100
                        Прекрасные виллы нового строительства с личным бассейном расположенны в Сан Хавьер на первой (...)</div><div class="small">Titanium Properties </div><div class="ip-overview-catcontainer"><a href="/index.html/propiedades/cat/5-villa">Вилла</a><span class="ip-cat-icon-divider">&#160;</span></div>        </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>



                        <div class="row-fluid ip-row0 ip-overview-row" id="ip-listing-100990">
                            <div class="span12">
                                <div class="span3 ip-overview-img">
                                    <div class="ip-property-thumb-holder">                
                                        <a href="/index.html/propiedades/property/100990-potryasayushchaya-villa-novogo-stroitelstva-v-pilar-de-la-oradada-mursiya-pilar-de-la-oradada"><img src="/media/com_iproperty/pictures/tn_700_35165b0275dfa9430_thumb.jpg" alt="Потрясающая Вилла Нового Строительства в Пилар де ла Орадада, Мурсия" class="img-polaroid ip-overview-thumb" /></a>                
                                                    </div>
                                    <h4 class="ip-overview-price pull-right">409.000 €</h4>
                                </div> 
                                <div class="span9 ip-overview-desc">
                                                                        <div class="ip-overview-title">
                                        <a href="/index.html/propiedades/property/100990-potryasayushchaya-villa-novogo-stroitelstva-v-pilar-de-la-oradada-mursiya-pilar-de-la-oradada" class="ip-property-header-accent">Ti3078 - Потрясающая Вилла Нового Строительства в Пилар де ла Орадада, Мурсия</a>
                                         - Пилар де ла Орадада, Мурсия Spain<br /><strong>Спальни:</strong> 3 &#160;&#160;<strong>Ванные комнаты:</strong> 3 &#160;&#160;<strong>M<sup>2</sup>:</strong> 146 &#160;&#160;<strong>Pisos:</strong> 2 &#160;&#160;<strong>M<sup>2</sup> участка:</strong> 306,00 &#160;&#160;<strong>Регион:</strong> Мурсия &#160;&#160;            </div>

                                    <div class="ip-overview-short-desc">Numérico: 1100
                        Вилла площадью в 146м² расположена на участке площадью в 306м² в Пилар де ла Орадада, Мурсия. Отличное (...)</div><div class="small">Titanium Properties </div><div class="ip-overview-catcontainer"><a href="/index.html/propiedades/cat/11-chalet">Отдельностоящий дом</a><span class="ip-cat-icon-divider">&#160;</span><a href="/index.html/propiedades/cat/5-villa">Вилла</a><span class="ip-cat-icon-divider">&#160;</span><a href="/index.html/propiedades/cat/14-obra-nueva">Новостройка</a></div>        </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>


                        <div class="row-fluid ip-row1 ip-overview-row" id="ip-listing-100052">
                            <div class="span12">
                                <div class="span3 ip-overview-img">
                                    <div class="ip-property-thumb-holder">                
                                        <a href="/index.html/propiedades/property/100052-bonito-chalet-de-ocasion-en-campello-el-campello"><img src="/media/com_iproperty/pictures/foto_web_Ti3129_25_55081eebbe31d_thumb.jpg" alt="Вилла в Coveta Fuma, Campello " class="img-polaroid ip-overview-thumb" /></a>                
                                                    </div>
                                    <h4 class="ip-overview-price pull-right"><span class="ip-slashprice">460.000 €</span> <span class="ip-newprice">420.000 €</span></h4>
                                </div> 
                                <div class="span9 ip-overview-desc">
                                                                        <div class="ip-overview-title">
                                        <a href="/index.html/propiedades/property/100052-bonito-chalet-de-ocasion-en-campello-el-campello" class="ip-property-header-accent">Ti3129 - Вилла в Coveta Fuma, Campello </a>
                                         - Эль Кампейо, Аликанте  Spain<br /><strong>Спальни:</strong> 3 &#160;&#160;<strong>Ванные комнаты:</strong> 2 &#160;&#160;<strong>M<sup>2</sup>:</strong> 489 &#160;&#160;<strong>Pisos:</strong> 2 &#160;&#160;<strong>M<sup>2</sup> участка:</strong> 747,00 &#160;&#160;            </div>

                                    <div class="ip-overview-short-desc"> 
                        Numérico: 1095
                        Вилла в Coveta Fuma , идеально подходит для отдыха. Дом создан, чтобы жить в течение всего года, 747 m² (...)</div><div class="small">Titanium Properties </div><div class="ip-overview-catcontainer"><span class="ip-cat-icon-divider">&#160;</span><a href="/index.html/propiedades/cat/5-villa">Вилла</a></div>        </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>



                        <div class="row-fluid ip-row0 ip-overview-row" id="ip-listing-413">
                            <div class="span12">
                                <div class="span3 ip-overview-img">
                                    <div class="ip-property-thumb-holder">                
                                        <a href="/index.html/propiedades/property/413-casa-unifamiliar-en-crevillente-crevillente"><img src="/media/com_iproperty/pictures/DSC0430154180195f1df3_thumb.jpg" alt="Дом в центре Crevillente" class="img-polaroid ip-overview-thumb" /></a>                
                                                    </div>
                                    <h4 class="ip-overview-price pull-right">425.000 €</h4>
                                </div> 
                                <div class="span9 ip-overview-desc">
                                                                        <div class="ip-overview-title">
                                        <a href="/index.html/propiedades/property/413-casa-unifamiliar-en-crevillente-crevillente" class="ip-property-header-accent">Ti4049 - Дом в центре Crevillente</a>
                                         - Кревьенте, Аликанте  Spain<br /><strong>Спальни:</strong> 4 &#160;&#160;<strong>Ванные комнаты:</strong> 4 &#160;&#160;<strong>M<sup>2</sup>:</strong> 393 &#160;&#160;<strong>Pisos:</strong> 4 &#160;&#160;            </div>

                                    <div class="ip-overview-short-desc">Numérico: 1095
                        Замечательный дом в центре Crevillente. С почти 400 m² Площадь., 3 спальни, 4 ванные комнаты, 1 туалет, 2 (...)</div><div class="small">Titanium Properties </div><div class="ip-overview-catcontainer"><a href="/index.html/propiedades/cat/11-chalet">Вилла</a></div>        </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>



                        <div class="row-fluid ip-row1 ip-overview-row" id="ip-listing-100912">
                            <div class="span12">
                                <div class="span3 ip-overview-img">
                                    <div class="ip-property-thumb-holder">                
                                        <a href="/index.html/propiedades/property/100912-potryasayushchij-adosado-v-zakrytoj-urbanizatsii-v-prestizhnoj-zone-la-maty-na-pervoj-linii-morya-la-mata-torrevekha"><img src="/media/com_iproperty/pictures/1518201780_tmp_DSC001285a7ebeabaa914_thumb.jpg" alt="Потрясающий Адосадо в Закрытой Урбанизации в Престижной Зоне Ла Маты на Первой Линии Моря" class="img-polaroid ip-overview-thumb" /></a>                
                                                    </div>
                                    <h4 class="ip-overview-price pull-right">425.000 €</h4>
                                </div> 
                                <div class="span9 ip-overview-desc">
                                                                        <div class="ip-overview-title">
                                        <a href="/index.html/propiedades/property/100912-potryasayushchij-adosado-v-zakrytoj-urbanizatsii-v-prestizhnoj-zone-la-maty-na-pervoj-linii-morya-la-mata-torrevekha" class="ip-property-header-accent">Ti6302 - Потрясающий Адосадо в Закрытой Урбанизации в Престижной Зоне Ла Маты на Первой Линии Моря</a>
                                         - Ла Мата (Торревьеха), Аликанте Spain<br /><strong>Спальни:</strong> 6 &#160;&#160;<strong>Ванные комнаты:</strong> 3 &#160;&#160;<strong>M<sup>2</sup>:</strong> 170 &#160;&#160;<strong>Pisos:</strong> 3 &#160;&#160;<strong>M<sup>2</sup> участка:</strong> 400,00 &#160;&#160;<strong>Регион:</strong> Аликанте &#160;&#160;            </div>

                                    <div class="ip-overview-short-desc">Numérico: 1050
                        Дом площадью в 170м² расположен на участке площадью в 400м² на первой линии моря Ла Маты. Всего 3 этажа, (...)</div><div class="small">Titanium Properties </div><div class="ip-overview-catcontainer"><a href="/index.html/propiedades/cat/5-villa">Вилла</a></div>        </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>



                        <div class="row-fluid ip-row0 ip-overview-row" id="ip-listing-101012">
                            <div class="span12">
                                <div class="span3 ip-overview-img">
                                    <div class="ip-property-thumb-holder">                
                                        <a href="/index.html/propiedades/property/101012-otdelnye-villy-s-otdelnym-bassejnom-v-aguas-nuevas-torrevekha-torrevekha"><img src="/media/com_iproperty/pictures/perspectiva15b2775f2926f7_thumb.jpg" alt="Отдельные Виллы с Отдельным Бассейном в Агуас Нуэвас, Торревьеха" class="img-polaroid ip-overview-thumb" /></a>                
                                                    </div>
                                    <h4 class="ip-overview-price pull-right">428.000 €</h4>
                                </div> 
                                <div class="span9 ip-overview-desc">
                                                                        <div class="ip-overview-title">
                                        <a href="/index.html/propiedades/property/101012-otdelnye-villy-s-otdelnym-bassejnom-v-aguas-nuevas-torrevekha-torrevekha" class="ip-property-header-accent">Ti3096 - Отдельные Виллы с Отдельным Бассейном в Агуас Нуэвас, Торревьеха</a>
                                         - Торревьеха, Аликанте Spain<br /><strong>Спальни:</strong> 3 &#160;&#160;<strong>Ванные комнаты:</strong> 2 &#160;&#160;<strong>M<sup>2</sup>:</strong> 258 &#160;&#160;<strong>M<sup>2</sup> участка:</strong> 301,00 &#160;&#160;<strong>Регион:</strong> Аликанте &#160;&#160;            </div>

                                    <div class="ip-overview-short-desc">Numérico: 1100
                        Новое строительство 4х отдельных 2х этажных вилл с личным бассейном, садом и парковочным местом в (...)</div><div class="small">Titanium Properties </div><div class="ip-overview-catcontainer"><a href="/index.html/propiedades/cat/5-villa">Вилла</a></div>        </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>



                        <div class="row-fluid ip-row1 ip-overview-row" id="ip-listing-100991">
                            <div class="span12">
                                <div class="span3 ip-overview-img">
                                    <div class="ip-property-thumb-holder">                
                                        <a href="/index.html/propiedades/property/100991-potryasayushchaya-villa-novogo-stroitelstva-s-lichnym-bassejnom-v-pilar-de-la-oradada-mursiya-pilar-de-la-oradada"><img src="/media/com_iproperty/pictures/nopic.png" alt="Потрясающая Вилла Нового Строительства с Личным Бассейном в Пилар де ла Орадада, Мурсия" class="img-polaroid ip-overview-thumb" /></a>                
                                                    </div>
                                    <h4 class="ip-overview-price pull-right">449.900 €</h4>
                                </div> 
                                <div class="span9 ip-overview-desc">
                                                                        <div class="ip-overview-title">
                                        <a href="/index.html/propiedades/property/100991-potryasayushchaya-villa-novogo-stroitelstva-s-lichnym-bassejnom-v-pilar-de-la-oradada-mursiya-pilar-de-la-oradada" class="ip-property-header-accent">Ti3079 - Потрясающая Вилла Нового Строительства с Личным Бассейном в Пилар де ла Орадада, Мурсия</a>
                                         - Пилар де ла Орадада, Мурсия Spain<br /><strong>Спальни:</strong> 3 &#160;&#160;<strong>Ванные комнаты:</strong> 2 &#160;&#160;<strong>M<sup>2</sup>:</strong> 137 &#160;&#160;<strong>M<sup>2</sup> участка:</strong> 385,00 &#160;&#160;<strong>Регион:</strong> Мурсия &#160;&#160;            </div>

                                    <div class="ip-overview-short-desc">Numérico: 1100
                        Вилла площадью в 137м² расположена на участке площадью в 385м² в Пилар де ла Орадада, Мурсия. Отличное (...)</div><div class="small">Titanium Properties </div><div class="ip-overview-catcontainer"><a href="/index.html/propiedades/cat/5-villa">Вилла</a><span class="ip-cat-icon-divider">&#160;</span></div>        </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>


                        <div class="row-fluid ip-row0 ip-overview-row" id="ip-listing-101021">
                            <div class="span12">
                                <div class="span3 ip-overview-img">
                                    <div class="ip-property-thumb-holder">                
                                        <a href="/index.html/propiedades/property/101021-villy-novogo-stroitelstva-s-lichnym-bassejnom-v-200-metrakh-ot-plyazha-torrevekha-torrevekha"><img src="/media/com_iproperty/pictures/tn_DSC73605b2bbadcb6c59_thumb.jpg" alt="Виллы Нового Строительства с Личным Бассейном в 200 метрах от Пляжа, Торревьеха" class="img-polaroid ip-overview-thumb" /></a>                
                                                    </div>
                                    <h4 class="ip-overview-price pull-right">479.000 €</h4>
                                </div> 
                                <div class="span9 ip-overview-desc">
                                                                        <div class="ip-overview-title">
                                        <a href="/index.html/propiedades/property/101021-villy-novogo-stroitelstva-s-lichnym-bassejnom-v-200-metrakh-ot-plyazha-torrevekha-torrevekha" class="ip-property-header-accent">Ti3098 - Виллы Нового Строительства с Личным Бассейном в 200 метрах от Пляжа, Торревьеха</a>
                                         - Торревьеха, Аликанте Spain<br /><strong>Спальни:</strong> 3 &#160;&#160;<strong>Ванные комнаты:</strong> 3 &#160;&#160;<strong>M<sup>2</sup>:</strong> 107 &#160;&#160;<strong>Pisos:</strong> 2 &#160;&#160;<strong>M<sup>2</sup> участка:</strong> 300,00 &#160;&#160;<strong>Регион:</strong> Аликанте &#160;&#160;            </div>

                                    <div class="ip-overview-short-desc">Numérico: 1100
                        Новое строительство вилл с личным бассейном, садом и парковочным местом находится в Торревьехе. (...)</div><div class="small">Titanium Properties </div><div class="ip-overview-catcontainer"><a href="/index.html/propiedades/cat/5-villa">Вилла</div>        </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>



                        <div class="row-fluid ip-row1 ip-overview-row" id="ip-listing-100574">
                            <div class="span12">
                                <div class="span3 ip-overview-img">
                                    <div class="ip-property-thumb-holder">                
                                        <a href="/index.html/propiedades/property/100574-prekrasnaya-otdelnaya-villa-v-los-balkones-los-balcones-torrevekha"><img src="/media/com_iproperty/pictures/Villa_Balcones_38_5736f4bc3912d_thumb.jpg" alt="Прекрасная Отдельная Вилла в Лос Балконес (Los Balcones)" class="img-polaroid ip-overview-thumb" /></a>                
                                                    </div>
                                    <h4 class="ip-overview-price pull-right"><span class="ip-slashprice">560.000 €</span> <span class="ip-newprice">480.000 €</span></h4>
                                </div> 
                                <div class="span9 ip-overview-desc">
                                                                        <div class="ip-overview-title">
                                        <a href="/index.html/propiedades/property/100574-prekrasnaya-otdelnaya-villa-v-los-balkones-los-balcones-torrevekha" class="ip-property-header-accent">Ti3270 - Прекрасная Отдельная Вилла в Лос Балконес (Los Balcones)</a>
                                         - Торревьеха, Аликанте Spain<br /><strong>Спальни:</strong> 3 &#160;&#160;<strong>Ванные комнаты:</strong> 2 &#160;&#160;<strong>M<sup>2</sup>:</strong> 212 &#160;&#160;<strong>M<sup>2</sup> участка:</strong> 860,00 &#160;&#160;<strong>Регион:</strong> Аликанте &#160;&#160;            </div>

                                    <div class="ip-overview-short-desc">Numérico: 1050
                        Вилла расположена в Лос Балконес. Площадь углового участка составляет 860м², где расположена (...)</div><div class="small">Titanium Properties </div><div class="ip-overview-catcontainer"><a href="/index.html/propiedades/cat/11-chalet">Отдельностоящий дом</a><span class="ip-cat-icon-divider">&#160;</span><a href="/index.html/propiedades/cat/5-villa">Вилла</a></div>        </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>



                        <div class="row-fluid ip-row0 ip-overview-row" id="ip-listing-100015">
                            <div class="span12">
                                <div class="span3 ip-overview-img">
                                    <div class="ip-property-thumb-holder">                
                                        <a href="/index.html/propiedades/property/100015-chalet-con-piscina-en-orihuela-orihuela"><img src="/media/com_iproperty/pictures/foto_reducida_Ti4084_3_54f4500f75ff3_thumb.jpg" alt="Великолепная вилла около города Ориуэла" class="img-polaroid ip-overview-thumb" /></a>                
                                                    </div>
                                    <h4 class="ip-overview-price pull-right">495.000 €</h4>
                                </div> 
                                <div class="span9 ip-overview-desc">
                                                                        <div class="ip-overview-title">
                                        <a href="/index.html/propiedades/property/100015-chalet-con-piscina-en-orihuela-orihuela" class="ip-property-header-accent">Ti4084 - Великолепная вилла около города Ориуэла</a>
                                         - Ориуэла, Аликанте  Spain<br /><strong>Спальни:</strong> 4 &#160;&#160;<strong>Ванные комнаты:</strong> 2 &#160;&#160;<strong>M<sup>2</sup>:</strong> 240 &#160;&#160;<strong>M<sup>2</sup> участка:</strong> 1.050,00 &#160;&#160;            </div>

                                    <div class="ip-overview-short-desc"> Numérico: 1050
                        Великолепная вилла около города Ориуэла. В этой вилле 240 кв.м можно насладиться спокойствием, в (...)</div><div class="small">Titanium Properties </div><div class="ip-overview-catcontainer"><a href="/index.html/propiedades/cat/5-villa">Вилла</a></div>        </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>



                        <div class="row-fluid ip-row1 ip-overview-row" id="ip-listing-101043">
                            <div class="span12">
                                <div class="span3 ip-overview-img">
                                    <div class="ip-property-thumb-holder">                
                                        <a href="/index.php/propiedades/property/101043-shikarnaya-villa-klassa-lyuks-na-pole-dlya-golfa-las-colinas-de-campoamor-novoe-storoitelstvo-oriuela-kosta"><img src="/media/com_iproperty/pictures/tn_161_CAM_06_EXT_GENERAL_v025b559f59c5faf_thumb.jpg" alt="Шикарная Вилла Класса Люкс на Поле для Гольфа Las Colinas de Campoamor, Новое стороительство" class="img-polaroid ip-overview-thumb" /></a>                
                                                    </div>
                                    <h4 class="ip-overview-price pull-right">620.000 €</h4>
                                </div> 
                                <div class="span9 ip-overview-desc">
                                                                        <div class="ip-overview-title">
                                        <a href="/index.php/propiedades/property/101043-shikarnaya-villa-klassa-lyuks-na-pole-dlya-golfa-las-colinas-de-campoamor-novoe-storoitelstvo-oriuela-kosta" class="ip-property-header-accent">Ti3109 - Шикарная Вилла Класса Люкс на Поле для Гольфа Las Colinas de Campoamor, Новое стороительство</a>
                                         - Ориуэла Коста, Аликанте Spain<br /><strong>Спальни:</strong> 3 &#160;&#160;<strong>Ванные комнаты:</strong> 4 &#160;&#160;<strong>M<sup>2</sup>:</strong> 161 &#160;&#160;<strong>Pisos:</strong> 2 &#160;&#160;<strong>M<sup>2</sup> участка:</strong> 752,00 &#160;&#160;<strong>Регион:</strong> Аликанте &#160;&#160;            </div>

                                    <div class="ip-overview-short-desc">Numérico: 1100
                        Шикарная вилла класса люкс, нового строительства состоит из 161м² на участке площадью в 752м² (...)</div><div class="small">Titanium Properties </div><div class="ip-overview-catcontainer"><a href="/index.php/propiedades/cat/5-villa">Вилла</a></div>        </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>



                        <div class="row-fluid ip-row0 ip-overview-row" id="ip-listing-500">
                            <div class="span12">
                                <div class="span3 ip-overview-img">
                                    <div class="ip-property-thumb-holder">                
                                        <a href="/index.php/propiedades/property/500-chalet-en-cabo-huertas-alicante-playa-alicante"><img src="/media/com_iproperty/pictures/foto_Ti4064_17_5a6c45f45c607_thumb.jpg" alt="Великолепная вилла с видом на море, Cabo Huertas, Alicante " class="img-polaroid ip-overview-thumb" /></a>                
                                                    </div>
                                    <h4 class="ip-overview-price pull-right">630.000 €</h4>
                                </div> 
                                <div class="span9 ip-overview-desc">
                                                                        <div class="ip-overview-title">
                                        <a href="/index.php/propiedades/property/500-chalet-en-cabo-huertas-alicante-playa-alicante" class="ip-property-header-accent">Ti4064 - Великолепная вилла с видом на море, Cabo Huertas, Alicante </a>
                                         - Аликанте, Аликанте  Spain<br /><strong>Спальни:</strong> 4 &#160;&#160;<strong>Ванные комнаты:</strong> 2 &#160;&#160;<strong>M<sup>2</sup>:</strong> 200 &#160;&#160;<strong>M<sup>2</sup> участка:</strong> 800,00 &#160;&#160;            </div>

                                    <div class="ip-overview-short-desc">Numérico: 1055
                        Великолепная вилла в прекрасном месте в 400 метрах от пляжей, в самом престижном районе Кабо Huertas. 4 (...)</div><div class="small">Titanium Properties </div><div class="ip-overview-catcontainer"><a href="/index.php/propiedades/cat/5-villa">Вилла</a></div>        </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>



                        <div class="row-fluid ip-row1 ip-overview-row" id="ip-listing-100362">
                            <div class="span12">
                                <div class="span3 ip-overview-img">
                                    <div class="ip-property-thumb-holder">                
                                        <a href="/index.php/propiedades/property/100362-velikolepnyj-chalet-s-lichnym-bassejnom-na-pervoj-linii-golfa-plyazh-san-khuan-san-khuan-de-alikante"><img src="/media/com_iproperty/pictures/Fotos_Ti6034_1_562e31abd5cad_thumb.jpg" alt="Великолепный Чалет с Личным Бассейном, на Первой Линии Гольфа, Пляж Сан Хуан" class="img-polaroid ip-overview-thumb" /></a>                
                                                    </div>
                                    <h4 class="ip-overview-price pull-right">640.000 €</h4>
                                </div> 
                                <div class="span9 ip-overview-desc">
                                                                        <div class="ip-overview-title">
                                        <a href="/index.php/propiedades/property/100362-velikolepnyj-chalet-s-lichnym-bassejnom-na-pervoj-linii-golfa-plyazh-san-khuan-san-khuan-de-alikante" class="ip-property-header-accent">Ti6034 - Великолепный Чалет с Личным Бассейном, на Первой Линии Гольфа, Пляж Сан Хуан</a>
                                         - Сан Хуан Пляж, Аликанте Spain<br /><strong>Спальни:</strong> 6 &#160;&#160;<strong>Ванные комнаты:</strong> 4 &#160;&#160;<strong>M<sup>2</sup>:</strong> 300 &#160;&#160;<strong>Pisos:</strong> 2 &#160;&#160;<strong>M<sup>2</sup> участка:</strong> 400,00 &#160;&#160;<strong>Регион:</strong> Аликанте &#160;&#160;            </div>

                                    <div class="ip-overview-short-desc">Numérico: 1050
                        Просторный Чалет, площадью в 300м², расположен на участке, площадью в 400м². Состоит из 6 спален, 4 (...)</div><div class="small">Titanium Properties </div><div class="ip-overview-catcontainer"><a href="/index.php/propiedades/cat/5-villa">Вилла</a><</div>        </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>



                        <div class="row-fluid ip-row0 ip-overview-row" id="ip-listing-100449">
                            <div class="span12">
                                <div class="span3 ip-overview-img">
                                    <div class="ip-property-thumb-holder">                
                                        <a href="/index.php/propiedades/property/100449-villa-ryadom-s-polem-dlya-golfa-na-plyazhe-v-san-khuane-san-khuan-de-alikante"><img src="/media/com_iproperty/pictures/Fotos_Ti3366_7_5698e416a704c_thumb.jpg" alt="Вилла Рядом с Полем для Гольфа на Пляже в Сан Хуане  " class="img-polaroid ip-overview-thumb" /></a>                
                                                    </div>
                                    <h4 class="ip-overview-price pull-right"><span class="ip-slashprice">1.100.000 €</span> <span class="ip-newprice">700.000 €</span></h4>
                                </div> 
                                <div class="span9 ip-overview-desc">
                                                                        <div class="ip-overview-title">
                                        <a href="/index.php/propiedades/property/100449-villa-ryadom-s-polem-dlya-golfa-na-plyazhe-v-san-khuane-san-khuan-de-alikante" class="ip-property-header-accent">Ti3366 - Вилла Рядом с Полем для Гольфа на Пляже в Сан Хуане  </a>
                                         - Сан Хуан Пляж, Аликанте Spain<br /><strong>Спальни:</strong> 3 &#160;&#160;<strong>Ванные комнаты:</strong> 3 &#160;&#160;<strong>M<sup>2</sup>:</strong> 480 &#160;&#160;<strong>Pisos:</strong> 3 &#160;&#160;<strong>M<sup>2</sup> участка:</strong> 510,00 &#160;&#160;<strong>Регион:</strong> Аликанте &#160;&#160;            </div>

                                    <div class="ip-overview-short-desc">Numérico: 1050 
                        ОПИСАНИЕ ДОМА:
                        Отличная вилла в современном стиле, построена в 2007 (...)</div><div class="small">Titanium Properties </div><div class="ip-overview-catcontainer"><a href="/index.php/propiedades/cat/5-villa">Вилла</a></div>        </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>



                        <div class="row-fluid ip-row0 ip-overview-row" id="ip-listing-100091">
                            <div class="span12">
                                <div class="span3 ip-overview-img">
                                    <div class="ip-property-thumb-holder">                
                                        <a href="/index.php/propiedades/property/100091-villa-de-lujo-en-elda-elda"><img src="/media/com_iproperty/pictures/o_1btr8ccvbk4glvh17v8faa15jh2f5a702cb68d8e1_thumb.jpg" alt="Новый роскошный дом в Elda" class="img-polaroid ip-overview-thumb" /></a>                
                                                    </div>
                                    <h4 class="ip-overview-price pull-right"><span class="ip-slashprice">952.000 €</span> <span class="ip-newprice">750.000 €</span></h4>
                                </div> 
                                <div class="span9 ip-overview-desc">
                                                                        <div class="ip-overview-title">
                                        <a href="/index.php/propiedades/property/100091-villa-de-lujo-en-elda-elda" class="ip-property-header-accent">Ti5037 - Новый роскошный дом в Elda</a>
                                         - Аликанте, Аликанте  Spain<br /><strong>Спальни:</strong> 5 &#160;&#160;<strong>Ванные комнаты:</strong> 5 &#160;&#160;<strong>M<sup>2</sup>:</strong> 400 &#160;&#160;<strong>Pisos:</strong> 3 &#160;&#160;<strong>M<sup>2</sup> участка:</strong> 1.200,00 &#160;&#160;            </div>

                                    <div class="ip-overview-short-desc">Numérico: 1050
                        Новый роскошный дом, только два года как построили. Красивый сад. 5 спален, гардеробная, обувная, 3 (...)</div><div class="small">Titanium Properties </div><div class="ip-overview-catcontainer"><a href="/index.php/propiedades/cat/5-villa">Вилла</a></div>        </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>




                        <div class="row-fluid ip-row1 ip-overview-row" id="ip-listing-100561">
                            <div class="span12">
                                <div class="span3 ip-overview-img">
                                    <div class="ip-property-thumb-holder">                
                                        <a href="/index.php/propiedades/property/100561-villa-klassa-lyuks-novostrojka-v-kampoamor-oriuela-kosta-campoamor-orihuela-costa-oriuela-kosta761154052"><img src="/media/com_iproperty/pictures/fotos_3_5a66153811975_thumb.jpg" alt="Вилла Класса Люкс - Новостройка в Кампоамор, Ориуэла Коста (Campoamor – Orihuela Costa)" class="img-polaroid ip-overview-thumb" /></a>                
                                                    </div>
                                    <h4 class="ip-overview-price pull-right">799.000 €</h4>
                                </div> 
                                <div class="span9 ip-overview-desc">
                                                                        <div class="ip-overview-title">
                                        <a href="/index.php/propiedades/property/100561-villa-klassa-lyuks-novostrojka-v-kampoamor-oriuela-kosta-campoamor-orihuela-costa-oriuela-kosta761154052" class="ip-property-header-accent">Ti3251 - Вилла Класса Люкс - Новостройка в Кампоамор, Ориуэла Коста (Campoamor – Orihuela Costa)</a>
                                         - Ориуэла Коста, Аликанте Spain<br /><strong>Спальни:</strong> 3 &#160;&#160;<strong>Ванные комнаты:</strong> 4 &#160;&#160;<strong>M<sup>2</sup>:</strong> 194 &#160;&#160;<strong>Pisos:</strong> 2 &#160;&#160;<strong>M<sup>2</sup> участка:</strong> 500,00 &#160;&#160;<strong>Регион:</strong> Аликанте &#160;&#160;            </div>

                                    <div class="ip-overview-short-desc">Numérico: 1050
                        Вилла ультрасовременного дизайна обладает лучшим качеством, класса люкс. Открытые террасы и (...)</div><div class="small">Titanium Properties </div><div class="ip-overview-catcontainer"><a href="/index.php/propiedades/cat/5-villa">Вилла</a></div>        </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>



                        <div class="row-fluid ip-row0 ip-overview-row" id="ip-listing-100563">
                            <div class="span12">
                                <div class="span3 ip-overview-img">
                                    <div class="ip-property-thumb-holder">                
                                        <a href="/index.php/propiedades/property/100563-villa-klassa-lyuks-novostrojka-model-marta-v-kampoamor-oriuela-kosta-campoamor-orihuela-costa-oriuela-kosta"><img src="/media/com_iproperty/pictures/Fotos_Ti4124_para_WBE_2_572715c32ed3d_thumb.jpg" alt="Вилла Класса Люкс– Новостройка, Mодель Марта в Кампоамор, Ориуэла Коста (Campoamor – Orihuela Costa)" class="img-polaroid ip-overview-thumb" /></a>                
                                                    </div>
                                    <h4 class="ip-overview-price pull-right">799.000 €</h4>
                                </div> 
                                <div class="span9 ip-overview-desc">
                                                                        <div class="ip-overview-title">
                                        <a href="/index.php/propiedades/property/100563-villa-klassa-lyuks-novostrojka-model-marta-v-kampoamor-oriuela-kosta-campoamor-orihuela-costa-oriuela-kosta" class="ip-property-header-accent">Ti4124 - Вилла Класса Люкс– Новостройка, Mодель Марта в Кампоамор, Ориуэла Коста (Campoamor – Orihuela Costa)</a>
                                         - Ориуэла Коста, Аликанте Spain<br /><strong>Спальни:</strong> 4 &#160;&#160;<strong>Ванные комнаты:</strong> 4 &#160;&#160;<strong>M<sup>2</sup>:</strong> 197 &#160;&#160;<strong>Pisos:</strong> 2 &#160;&#160;<strong>M<sup>2</sup> участка:</strong> 500,00 &#160;&#160;<strong>Регион:</strong> Аликанте &#160;&#160;            </div>

                                    <div class="ip-overview-short-desc">Numérico: 1050
                        Вилла ультрасовременного дизайна обладает лучшим качеством, класса люкс. Открытые террасы и (...)</div><div class="small">Titanium Properties </div><div class="ip-overview-catcontainer"><a href="/index.php/propiedades/cat/5-villa">Вилла</a></div>        </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>



                        <div class="row-fluid ip-row1 ip-overview-row" id="ip-listing-100480">
                            <div class="span12">
                                <div class="span3 ip-overview-img">
                                    <div class="ip-property-thumb-holder">                
                                        <a href="/index.php/propiedades/property/100480-sovremennyj-chalet-v-kovet-fuma-coveta-fuma-s-pryamym-dostupom-k-moryu-i-panoramnym-vidom-kampejo"><img src="/media/com_iproperty/pictures/o_1bkf19t6g1e4875117611fq1jev275a6ee3b6ec7b4_thumb.jpg" alt="Современный Чалет в Ковет Фума (Coveta Fuma), с Прямым Доступом к Морю И Панорамным Видом" class="img-polaroid ip-overview-thumb" /></a>                
                                                    </div>
                                    <h4 class="ip-overview-price pull-right"><span class="ip-slashprice">1.000.000 €</span> <span class="ip-newprice">830.000 €</span></h4>
                                </div> 
                                <div class="span9 ip-overview-desc">
                                                                        <div class="ip-overview-title">
                                        <a href="/index.php/propiedades/property/100480-sovremennyj-chalet-v-kovet-fuma-coveta-fuma-s-pryamym-dostupom-k-moryu-i-panoramnym-vidom-kampejo" class="ip-property-header-accent">Ti4118 - Современный Чалет в Ковет Фума (Coveta Fuma), с Прямым Доступом к Морю И Панорамным Видом</a>
                                         - Кампейо, Аликанте Spain<br /><strong>Спальни:</strong> 4 &#160;&#160;<strong>Ванные комнаты:</strong> 3 &#160;&#160;<strong>M<sup>2</sup>:</strong> 450 &#160;&#160;<strong>M<sup>2</sup> участка:</strong> 800,00 &#160;&#160;<strong>Регион:</strong> Аликанте &#160;&#160;            </div>

                                    <div class="ip-overview-short-desc">Numérico: 1050
                        Чалет состоит из просторной гостиной, открытой кухни с видом на море, также есть выход на террасу и (...)</div><div class="small">Titanium Properties </div><div class="ip-overview-catcontainer"><a href="/index.php/propiedades/cat/5-villa">Вилла</a></div>        </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>



                        <div class="row-fluid ip-row0 ip-overview-row" id="ip-listing-100836">
                            <div class="span12">
                                <div class="span3 ip-overview-img">
                                    <div class="ip-property-thumb-holder">                
                                        <a href="/index.php/propiedades/property/100836-la-mata-beach-villy-skandinavskij-stil-klassa-lyuks-na-plyazhe-la-maty-la-mata-torrevekha"><img src="/media/com_iproperty/pictures/1_2_5b92407705908_thumb.jpg" alt="“La Mata Beach Виллы” – Скандинавский Стиль класса Люкс на Пляже Ла Маты" class="img-polaroid ip-overview-thumb" /></a>                
                                                    </div>
                                    <h4 class="ip-overview-price pull-right">845.000 €</h4>
                                </div> 
                                <div class="span9 ip-overview-desc">
                                                                        <div class="ip-overview-title">
                                        <a href="/index.php/propiedades/property/100836-la-mata-beach-villy-skandinavskij-stil-klassa-lyuks-na-plyazhe-la-maty-la-mata-torrevekha" class="ip-property-header-accent">Ti4003 - “La Mata Beach Виллы” – Скандинавский Стиль класса Люкс на Пляже Ла Маты</a>
                                         - Ла Мата (Торревьеха), Аликанте Spain<br /><strong>Спальни:</strong> 4 &#160;&#160;<strong>Ванные комнаты:</strong> 4 &#160;&#160;<strong>M<sup>2</sup>:</strong> 150 &#160;&#160;<strong>Pisos:</strong> 2 &#160;&#160;<strong>M<sup>2</sup> участка:</strong> 200,00 &#160;&#160;<strong>Регион:</strong> Аликанте &#160;&#160;            </div>

                                    <div class="ip-overview-short-desc">Numérico: 1050
                        Titanium Properties с удовольствием представляет Вам эту потрясающую возможность воплатить свою мечту в (...)</div><div class="small">Titanium Properties </div><div class="ip-overview-catcontainer"><a href="/index.php/propiedades/cat/5-villa">Вилла</a></div>        </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>


                        <div class="row-fluid ip-row1 ip-overview-row" id="ip-listing-100984">
                            <div class="span12">
                                <div class="span3 ip-overview-img">
                                    <div class="ip-property-thumb-holder">                
                                        <a href="/index.php/propiedades/property/100984-potryasayushchij-chalet-v-dekhesa-de-kampoamor-oriuela-kosta-oriuela-kosta"><img src="/media/com_iproperty/pictures/215afa9550a3e31_thumb.jpg" alt="Потрясающий Чалет в Дехеса де Кампоамор, Ориуэла Коста" class="img-polaroid ip-overview-thumb" /></a>                
                                                    </div>
                                    <h4 class="ip-overview-price pull-right">850.000 €</h4>
                                </div> 
                                <div class="span9 ip-overview-desc">
                                                                        <div class="ip-overview-title">
                                        <a href="/index.php/propiedades/property/100984-potryasayushchij-chalet-v-dekhesa-de-kampoamor-oriuela-kosta-oriuela-kosta" class="ip-property-header-accent">Ti9301 - Потрясающий Чалет в Дехеса де Кампоамор, Ориуэла Коста</a>
                                         - Ориуэла Коста, Аликанте Spain<br /><strong>Спальни:</strong> 9 &#160;&#160;<strong>Ванные комнаты:</strong> 5 &#160;&#160;<strong>M<sup>2</sup>:</strong> 563 &#160;&#160;<strong>Pisos:</strong> Этаж: 3 &#160;&#160;<strong>M<sup>2</sup> участка:</strong> 1.500,00 &#160;&#160;<strong>Регион:</strong> Аликанте &#160;&#160;            </div>

                                    <div class="ip-overview-short-desc">Numérico: 1100
                        Вилла находится в Дехеса де Кампоамор в Ориуэла Коста. Дом площадью в 563 м² включает в себя 3 этажа и (...)</div><div class="small">Titanium Properties </div><div class="ip-overview-catcontainer"><a href="/index.php/propiedades/cat/5-villa">Вилла</a><span class="ip-cat-icon-divider">&#160;</span></div>        </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>



                        <div class="row-fluid ip-row0 ip-overview-row" id="ip-listing-101002">
                            <div class="span12">
                                <div class="span3 ip-overview-img">
                                    <div class="ip-property-thumb-holder">                
                                        <a href="/index.php/propiedades/property/101002-villa-klassa-lyuks-v-oriuela-kosta-novostrojka-oriuela-kosta"><img src="/media/com_iproperty/pictures/tn_Chalet_2_5b0ed8c28f859_thumb.jpg" alt="Вилла Класса Люкс в Ориуэла Коста, Новостройка" class="img-polaroid ip-overview-thumb" /></a>                
                                                    </div>
                                    <h4 class="ip-overview-price pull-right">850.000 €</h4>
                                </div> 
                                <div class="span9 ip-overview-desc">
                                                                        <div class="ip-overview-title">
                                        <a href="/index.php/propiedades/property/101002-villa-klassa-lyuks-v-oriuela-kosta-novostrojka-oriuela-kosta" class="ip-property-header-accent">Ti4013 - Вилла Класса Люкс в Ориуэла Коста, Новостройка</a>
                                         - Ориуэла Коста, Аликанте Spain<br /><strong>Спальни:</strong> 4 &#160;&#160;<strong>Ванные комнаты:</strong> 5 &#160;&#160;<strong>M<sup>2</sup>:</strong> 380 &#160;&#160;<strong>Pisos:</strong> 2 &#160;&#160;<strong>M<sup>2</sup> участка:</strong> 630,00 &#160;&#160;<strong>Регион:</strong> Аликанте &#160;&#160;            </div>

                                    <div class="ip-overview-short-desc">Numérico: 1100
                        Вилла класса люкс площадью в 380м² расположена на участке в 630м² и находится в Ориуэла Коста. Состоит (...)</div><div class="small">Titanium Properties </div><div class="ip-overview-catcontainer"><a href="/index.php/propiedades/cat/5-villa">Вилла</a></div>        </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>



                        <div class="row-fluid ip-row1 ip-overview-row" id="ip-listing-20">
                            <div class="span12">
                                <div class="span3 ip-overview-img">
                                    <div class="ip-property-thumb-holder">                
                                        <a href="/index.php/propiedades/property/20-adosado-porticomar-guardamar"><img src="/media/com_iproperty/pictures/o_1blis54o0qsg1kangkgonvan72v5a70948aad6dc_thumb.jpg" alt="Дом-адосадо в Гуардамаре, Porticomar " class="img-polaroid ip-overview-thumb" /></a>                
                                                    </div>
                                    <h4 class="ip-overview-price pull-right"><span class="ip-slashprice">1.250.000 €</span> <span class="ip-newprice">890.000 €</span></h4>
                                </div> 
                                <div class="span9 ip-overview-desc">
                                                                        <div class="ip-overview-title">
                                        <a href="/index.php/propiedades/property/20-adosado-porticomar-guardamar" class="ip-property-header-accent">Ti6001 - Дом-адосадо в Гуардамаре, Porticomar </a>
                                         - Гуардамар, Аликанте  Spain<br /><strong>Спальни:</strong> 6 &#160;&#160;<strong>Ванные комнаты:</strong> 4 &#160;&#160;<strong>M<sup>2</sup>:</strong> 234 &#160;&#160;<strong>Pisos:</strong> 3 &#160;&#160;            </div>

                                    <div class="ip-overview-short-desc">Numérico: 1050
                        С ВИДОМ НА МОРЕ Отдельная вилла !!! В роскошной резиденции с бассейном с водопадами. Дом имеет 3 (...)</div><div class="small">Titanium Properties </div><div class="ip-overview-catcontainer"><a href="/index.php/propiedades/cat/5-villa">Вилла</a></div>        </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>


                        <div class="row-fluid ip-row1 ip-overview-row" id="ip-listing-607">
                            <div class="span12">
                                <div class="span3 ip-overview-img">
                                    <div class="ip-property-thumb-holder">                
                                        <a href="/index.php/propiedades/property/607-villa-de-lujo-en-benidorm-benidorm"><img src="/media/com_iproperty/pictures/154bf826b6a344_thumb.jpg" alt="Роскошная вилла с видом на море,  Sierra Dorada, Benidorm " class="img-polaroid ip-overview-thumb" /></a>                
                                                    </div>
                                    <h4 class="ip-overview-price pull-right">2.950.000 €</h4>
                                </div> 
                                <div class="span9 ip-overview-desc">
                                                                        <div class="ip-overview-title">
                                        <a href="/index.php/propiedades/property/607-villa-de-lujo-en-benidorm-benidorm" class="ip-property-header-accent">Ti5034 - Роскошная вилла с видом на море,  Sierra Dorada, Benidorm </a>
                                         - Алтея, Аликанте  Spain<br /><strong>Спальни:</strong> 5 &#160;&#160;<strong>Ванные комнаты:</strong> 6 &#160;&#160;<strong>M<sup>2</sup>:</strong> 600 &#160;&#160;<strong>Pisos:</strong> 2 &#160;&#160;<strong>M<sup>2</sup> участка:</strong> 1.000,00 &#160;&#160;            </div>

                                    <div class="ip-overview-short-desc">Numérico: 1050
                        Эффектная дизайнерская вилла с фантастическим видом на море. 600 m², на участке 1000 м². Вилла имеет 5 (...)</div><div class="small">Titanium Properties </div><div class="ip-overview-catcontainer"><a href="/index.php/propiedades/cat/5-villa">Вилла</a></div>        </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>



                        <div class="row-fluid ip-row0 ip-overview-row" id="ip-listing-101031">
                            <div class="span12">
                                <div class="span3 ip-overview-img">
                                    <div class="ip-property-thumb-holder">                
                                        <a href="/index.php/propiedades/property/101031-villa-novogo-stroitelstva-na-vtoroj-linii-morya-s-potryasayushchim-vidom-la-mata-torrevekha-la-mata-torrevekha"><img src="/media/com_iproperty/pictures/3-Vista-Trasera_Buena5b35f3640bd28_thumb.jpg" alt="Вилла Нового Строительства на Второй Линии Моря с Потрясающим Видом, Ла Мата (Торревьеха)" class="img-polaroid ip-overview-thumb" /></a>                
                                                    </div>
                                    <h4 class="ip-overview-price pull-right">3.000.000 €</h4>
                                </div> 
                                <div class="span9 ip-overview-desc">
                                                                        <div class="ip-overview-title">
                                        <a href="/index.php/propiedades/property/101031-villa-novogo-stroitelstva-na-vtoroj-linii-morya-s-potryasayushchim-vidom-la-mata-torrevekha-la-mata-torrevekha" class="ip-property-header-accent">Ti4304 - Вилла Нового Строительства на Второй Линии Моря с Потрясающим Видом, Ла Мата (Торревьеха)</a>
                                         - Ла Мата (Торревьеха), Аликанте Spain<br /><strong>Спальни:</strong> 4 &#160;&#160;<strong>Ванные комнаты:</strong> 4 &#160;&#160;<strong>M<sup>2</sup>:</strong> 863 &#160;&#160;<strong>Pisos:</strong> 2 &#160;&#160;<strong>M<sup>2</sup> участка:</strong> 1.454,00 &#160;&#160;<strong>Регион:</strong> Аликанте &#160;&#160;            </div>

                                    <div class="ip-overview-short-desc">Numérico: 1100
                        Вилла выполнена в ¨Авангардном¨ стиле и находятся на второй линии моря с потрясающим панорамным (...)</div><div class="small">Titanium Properties </div><div class="ip-overview-catcontainer"><a href="/index.php/propiedades/cat/5-villa">Вилла</a></div>        </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>



                        <div class="row-fluid ip-row1 ip-overview-row" id="ip-listing-424">
                            <div class="span12">
                                <div class="span3 ip-overview-img">
                                    <div class="ip-property-thumb-holder">                
                                        <a href="/index.php/propiedades/property/424-villa-de-lujo-minimalista-en-altea-altea"><img src="/media/com_iproperty/pictures/7542130035f392_thumb.jpg" alt="Вилла Класса Люкс, Алтея (Altea)" class="img-polaroid ip-overview-thumb" /></a>                
                                                    </div>
                                    <h4 class="ip-overview-price pull-right">3.300.000 €</h4>
                                </div> 
                                <div class="span9 ip-overview-desc">
                                                                        <div class="ip-overview-title">
                                        <a href="/index.php/propiedades/property/424-villa-de-lujo-minimalista-en-altea-altea" class="ip-property-header-accent">Ti4051 - Вилла Класса Люкс, Алтея (Altea)</a>
                                         - Алтея, Аликанте  Spain<br /><strong>Спальни:</strong> 4 &#160;&#160;<strong>Ванные комнаты:</strong> 6 &#160;&#160;<strong>M<sup>2</sup>:</strong> 324 &#160;&#160;<strong>Pisos:</strong> 4 &#160;&#160;            </div>

                                    <div class="ip-overview-short-desc">Numérico: 1090
                        Вилла супер люкс, высокое качество строительства, обставлены и оформлены с большой детализацией, (...)</div><div class="small">Titanium Properties </div><div class="ip-overview-catcontainer"><a href="/index.php/propiedades/cat/5-villa">Вилла</a></div>        </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>


                        <div class="row-fluid ip-row0 ip-overview-row" id="ip-listing-101023">
                            <div class="span12">
                                <div class="span3 ip-overview-img">
                                    <div class="ip-property-thumb-holder">                
                                        <a href="/index.php/propiedades/property/101023-eksklyuzivnaya-i-ellegantnaya-villa-na-pervoj-linii-morya-s-pryamym-dostupom-k-plyazhu-v-denii-denia"><img src="/media/com_iproperty/pictures/imagen05b2e1c8c9fddd_thumb.jpg" alt="Эксклюзивная и Эллегантная Вилла на Первой Линии Моря с Прямым доступом к Пляжу в Дении" class="img-polaroid ip-overview-thumb" /></a>                
                                                    </div>
                                    <h4 class="ip-overview-price pull-right">8.350.000 €</h4>
                                </div> 
                                <div class="span9 ip-overview-desc">
                                                                        <div class="ip-overview-title">
                                        <a href="/index.php/propiedades/property/101023-eksklyuzivnaya-i-ellegantnaya-villa-na-pervoj-linii-morya-s-pryamym-dostupom-k-plyazhu-v-denii-denia" class="ip-property-header-accent">Ti10002 - Эксклюзивная и Эллегантная Вилла на Первой Линии Моря с Прямым доступом к Пляжу в Дении</a>
                                         - Дениа, Аликанте Spain<br /><strong>Спальни:</strong> 10 &#160;&#160;<strong>Ванные комнаты:</strong> 10 &#160;&#160;<strong>M<sup>2</sup>:</strong> 1.637 &#160;&#160;<strong>Pisos:</strong> 3 &#160;&#160;<strong>M<sup>2</sup> участка:</strong> 10.609,00 &#160;&#160;<strong>Регион:</strong> Аликанте &#160;&#160;            </div>

                                    <div class="ip-overview-short-desc">Numérico: 1100
                        Потрясающая вилла расположена на первой линии моря с личным прямым доступом к пляжу в Дении. (...)</div><div class="small">Titanium Properties </div><div class="ip-overview-catcontainer"><a href="/index.php/propiedades/cat/5-villa">Вилла</a></div>        </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>

                        <div class="row-fluid ip-row1 ip-overview-row" id="ip-listing-100464">
                            <div class="span12">
                                <div class="span3 ip-overview-img">
                                    <div class="ip-property-thumb-holder">                
                                        <a href="/index.php/propiedades/property/100464-villa-lyuks-v-alfas-del-pi-alikante-alteya"><img src="/media/com_iproperty/pictures/Fotos_Ti9002_para_WEB_9_56b331509eb76_thumb.jpg" alt="Вилла Люкс в Альфас Дель Пи, Аликанте" class="img-polaroid ip-overview-thumb" /></a>                
                                                    </div>
                                    <h4 class="ip-overview-price pull-right">15.000.000 €</h4>
                                </div> 
                                <div class="span9 ip-overview-desc">
                                                                        <div class="ip-overview-title">
                                        <a href="/index.php/propiedades/property/100464-villa-lyuks-v-alfas-del-pi-alikante-alteya" class="ip-property-header-accent">Ti9002 - Вилла Люкс в Альфас Дель Пи, Аликанте</a>
                                         - Алтея, Аликанте Spain<br /><strong>Спальни:</strong> 9 &#160;&#160;<strong>Ванные комнаты:</strong> 5 &#160;&#160;<strong>M<sup>2</sup>:</strong> 500 &#160;&#160;<strong>Pisos:</strong> 2 &#160;&#160;<strong>M<sup>2</sup> участка:</strong> 5.389,00 &#160;&#160;<strong>Регион:</strong> Аликанте &#160;&#160;            </div>

                                    <div class="ip-overview-short-desc">Numérico: 1050
                        Вилла высшего качества, расположена в потрясающем месте с панорамным видом на море. Состоит из 2х (...)</div><div class="small">Titanium Properties </div><div class="ip-overview-catcontainer"><a href="/index.php/propiedades/cat/5-villa">Вилла</a></div>        </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>




                        <div class="pageN">
                            <div class="pegeUl">
                                <ul>
                                    <li class="pageStart activ"><a title="" class="" data-original-title="Вперёд">В начало</a></li>
                                    <li class="pagePrev activ"><a title="" class="" data-original-title="В конец">Назад</a></li>
                                    <li><span class="pageNav current">1</span></li>
                                    <li><a href="projects-2.html" class="pageNav">2</a></li>
                                    <li><a href="projects-3.html" class="pageNav">3</a></li>
                                    <li><a href="projects-4.html" class="pageNav">...</a></li>
                                    <li><a title="" href="projects-2.html" class="pageNavNext" data-original-title="Вперёд">Вперёд</a></li>
                                    <li><a title="" href="projects-14.html" class="pageNavNext" data-original-title="В конец">В конец</a></li>
                                </ul>
                                <br><span class="smallPageNext">Страница 1 из 14</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php require 'tpl/footer.php'?>


