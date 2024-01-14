@extends('layout')

@section('title')
    Главная страница
@endsection

@section('main_content')
    <div class="container">
        <div class="my-custom-class-div1">
            <div class="text-bg-white me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center">
                <div class="my-3 py-3">
                    <p class="my-custom-class-optimization">Оптимизация </p></br>
                    <p class="my-custom-class-innovation">Инновации</p></br>
                    <p class="my-custom-class-results">Результаты</p>
                </div>

            </div>
            <div class="image-container">
                <img src="/png/Group.png" alt="First Image" class="first-image" width="1188" height="766">
                <img src="/png/iPhone.png" alt="Second Image" class="second-image" width="1188" height="725">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="my-custom-class-div2">
            <div class="image-container2">
                <img src="/png/Group.png" alt="First Image" class="first-image2">
                <img src="/png/imageMaksat.png" alt="Image Maksat" class="second-image2">
            </div>
            <div class="text-bg-white me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
                <div class="my-3 py-3">
                    <div class="my-custom-class-kto">Кто тут главный</div>
                    <p class="my-custom-class-kto-name">Максат Кузембаев</p>
                    <p class="my-custom-class-kto-paragraph">Я создаю Tinder для бизнеса, где каждая из сторон получает
                        заветный match, с выгодой для себя и своей компании</p>
                    <p class="my-custom-class-kto-paragraph">Знакомлю и показываю преимущества "Жениха и невесты, лучше чем
                        Роза Сябитова ;)"</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="my-custom-class-su">
            <h2 class="my-custom-class-h2"><span class="my-custom-class-uspeh">Успех</span> начинается с консультации</h2>
            <img src="/png/3d.png" alt="some pic" class="my-custom-class-3d">
            <p class="my-custom-class-our">Наши области эксперизы</p>
        </div>
        <div class="row row-cols-1 row-cols-md-3 text-center my-custom-class-3wind">
            <div class="col">
                <div class="card mb-4 rounded-3">
                    <div class="card-header py-3">
                        <h4 class="my-0 fw-normal">Бизнес и менеджмент</h4>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-4 rounded-3">
                    <div class="card-header py-3">
                        <h4 class="my-0 fw-normal">Финансы и инвестиции</h4>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-4 rounded-3">
                    <div class="card-header py-3">
                        <h4 class="my-0 fw-normal">Технологии и образование</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="my-custom-class-su">
            <img src="/png/3d.png" alt="some pic" class="my-custom-class-3d1">
            <p class="my-custom-class-our">Почему выбирают нас?</p>
        </div>
        <div class="row row-cols-1 row-cols-md-3 mb-3 text-center my-custom-class-3wind">
            <div class="col">
                <div class="card mb-4 rounded-3">
                    <div class="card-header py-3">
                        <h4 class="my-0 fw-normal">Гибкость и моментальность:</h4>
                    </div>
                    <div class="card-body">
                        <p>Готовность предоставить гибкий доступ к экспертам и знаниям в нужный момент,
                            обеспечивая оперативное реагирование на ваши потребности.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-4 rounded-3">
                    <div class="card-header py-3">
                        <h4 class="my-0 fw-normal">Наличие твёрдой квалификации:</h4>
                    </div>
                    <div class="card-body">
                        <p>Работа с профессионалами, уровень квалификации и опыт которых не вызывают никаких сомнений,
                            обеспечивая вам уверенность в качестве предоставляемых услуг. Минимальный и подтвержденный опыт
                            от 5 лет.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-4 rounded-3">
                    <div class="card-header py-3">
                        <h4 class="my-0 fw-normal">Экономия ресурсов:</h4>
                    </div>
                    <div class="card-body">
                        <p>Возможность сэкономить ресурсы, не поддерживая штат постоянных
                            сотрудников для решения временных и специфических задач.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="my-custom-class-su1">
            <img src="/png/3d.png" alt="some pic" class="my-custom-class-3d2">
            <p class="my-custom-class-our">Почему это выгодно?</p>
        </div>
        <div class="card-body">
            <p>В условиях дефицита квалифицированных специалистов мы предлагаем решение в виде платных консультаций.
                Вместо полного трудоустройства экспертов, мы предоставляем доступ к их опыту по мере необходимости,
                с более доступными ценами. Этот гибкий подход позволяет компаниям эффективно использовать знания выдающихся
                профессионалов
                без долгосрочных обязательств. Вы оплачиваете только за консультации, получая максимальную ценность и
                избегая постоянных затрат на зарплату.
                Такой формат работы позволяет быстро усвоить ключевые аспекты и постепенно интегрировать их внутренние
                процессы, обеспечивая стоимостную
                эффективность без избыточных финансовых затрат.
                📈 Преобразуйте свои идеи в успех с нашими экспертами. Доверьтесь лучшим, достигните большего!
                <a class="btn btn-link" href="#" role="button">Наши эксперты</a>
            </p>
        </div>
    </div>
    </div>
    <div class="container">
        <div class="my-custom-class-su3">
            <img src="/png/3d.png" alt="some pic" class="my-custom-class-3d">
            <p class="my-custom-class-our">Стоимость услуг</p>
        </div>
        <div class="row row-cols-1 row-cols-md-2
         mb-3 text-center my-custom-class-3wind">
            <div class="col">
                <div class="card mb-4 rounded-3">
                    <div class="card-body p-0">
                        <div class="my-custom-class-div3">
                            <div class="text-bg-white me-md-3 pt-3 px-3 pt-md-5 px-md-5">
                                <div class="my-3">
                                    <div class="image-container3">
                                        <img src="/png/left-orange.png" alt="First Image" class="first-image3">
                                        <img src="/png/lefthand.png" alt="Second Image" class="second-image3">
                                    </div>
                                    <div class="my-3 my-custom-class-text4">
                                        <h4 class="my-h4">Персональная консультация</h4>
                                        <p class="my-custom-class-person-consult">Напишите максимально подробно
                                            ваш запрос и отправьте мне. После рассмотрения, я задам уточняющие
                                            детали и предоставлю ответ по возможности сотрудничества.
                                        </p>
                                        <span class="price450"> 450 000 тг.</span>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-4 rounded-3">
                    <div class="card-body p-0">
                        <div class="my-custom-class-div4">
                            <div class="text-bg-white me-md-3 pt-3 px-3 pt-md-5 px-md-5">
                                <div class="my-3">
                                    <!-- Размещаем изображение перед текстом -->
                                    <div class="image-container4">
                                        <img src="/png/righthand.png" alt="Second Image" class="second-image4">
                                    </div>

                                    <!-- Затем текст будет с левой стороны -->
                                    <div class="my-3 my-custom-class-text5">
                                        <h4 class="my-h4-2">Групповая консультация</h4>
                                        <p class="my-custom-class-person-consult">Описываем так же как и в
                                            персональной консультации, только тут привлечены эксперты для
                                            проведения первичного аудита. С вашей стороны ко встрече допускается
                                            2 человека.
                                        </p>
                                        <span class="price15"> 1 500 000 тг.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">

            <div class="my-custom-class-su1">
                <img src="/png/3d.png" alt="some pic" class="my-custom-class-3d2">
                <p class="my-custom-class-our">Отзывы</p>
            </div>

            <div id="carouselExampleFade" class="carousel slide carousel-fade">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="card-group">
                            <div class="card">
                                <img src="/png/mask.png" class="card-img-top" alt="Photo">
                                <div class="card-body">
                                    <h5 class="card-title">ФИО</h5>
                                    <p class="card-text">Это более широкая карточка с вспомогательным текстом ниже в
                                        качестве естественного перехода к дополнительному контенту. Этот контент немного
                                        длиннее.</p>
                                    <p class="card-text"><small class="text-body-secondary">Последнее обновление 3 мин.
                                            назад</small></p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="/png/mask.png" class="card-img-top" alt="Photo">
                                <div class="card-body">
                                    <h5 class="card-title">ФИО</h5>
                                    <p class="card-text">Эта подсказка имеет вспомогательный текст ниже, как естественный
                                        ввод к дополнительному контенту.</p>
                                    <p class="card-text"><small class="text-body-secondary">Последнее обновление 3 мин.
                                            назад</small></p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="/png/mask.png" class="card-img-top" alt="Photo">
                                <div class="card-body">
                                    <h5 class="card-title">ФИО</h5>
                                    <p class="card-text">Это более широкая карта С вспомогательным текстом ниже в качестве
                                        естественного перехода к дополнительному контенту. Эта карточка имеет даже более
                                        длинный контент, чем первая, чтобы показать действие одинаковой высоты.</p>
                                    <p class="card-text"><small class="text-body-secondary">Последнее обновление 3 мин.
                                            назад</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card-group">
                            <div class="card">
                                <img src="/png/man.png" class="card-img-top" alt="Photo">
                                <div class="card-body">
                                    <h5 class="card-title">ФИО</h5>
                                    <p class="card-text">Это более широкая карточка с вспомогательным текстом ниже в
                                        качестве естественного перехода к дополнительному контенту. Этот контент немного
                                        длиннее.</p>
                                    <p class="card-text"><small class="text-body-secondary">Последнее обновление 3 мин.
                                            назад</small></p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="/png/man.png" class="card-img-top" alt="Photo">
                                <div class="card-body">
                                    <h5 class="card-title">ФИО</h5>
                                    <p class="card-text">Эта подсказка имеет вспомогательный текст ниже, как естественный
                                        ввод к дополнительному контенту.</p>
                                    <p class="card-text"><small class="text-body-secondary">Последнее обновление 3 мин.
                                            назад</small></p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="/png/man.png" class="card-img-top" alt="Photo">
                                <div class="card-body">
                                    <h5 class="card-title">ФИО</h5>
                                    <p class="card-text">Это более широкая карта С вспомогательным текстом ниже в качестве
                                        естественного перехода к дополнительному контенту. Эта карточка имеет даже более
                                        длинный контент, чем первая, чтобы показать действие одинаковой высоты.</p>
                                    <p class="card-text"><small class="text-body-secondary">Последнее обновление 3 мин.
                                            назад</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card-group">
                            <div class="card">
                                <img src="/png/mask.png" class="card-img-top" alt="Photo">
                                <div class="card-body">
                                    <h5 class="card-title">ФИО</h5>
                                    <p class="card-text">Это более широкая карточка с вспомогательным текстом ниже в
                                        качестве естественного перехода к дополнительному контенту. Этот контент немного
                                        длиннее.</p>
                                    <p class="card-text"><small class="text-body-secondary">Последнее обновление 3 мин.
                                            назад</small></p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="/png/mask.png" class="card-img-top" alt="Photo">
                                <div class="card-body">
                                    <h5 class="card-title">ФИО</h5>
                                    <p class="card-text">Эта подсказка имеет вспомогательный текст ниже, как естественный
                                        ввод к дополнительному контенту.</p>
                                    <p class="card-text"><small class="text-body-secondary">Последнее обновление 3 мин.
                                            назад</small></p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="/png/mask.png" class="card-img-top" alt="Photo">
                                <div class="card-body">
                                    <h5 class="card-title">ФИО</h5>
                                    <p class="card-text">Это более широкая карта С вспомогательным текстом ниже в качестве
                                        естественного перехода к дополнительному контенту. Эта карточка имеет даже более
                                        длинный контент, чем первая, чтобы показать действие одинаковой высоты.</p>
                                    <p class="card-text"><small class="text-body-secondary">Последнее обновление 3 мин.
                                            назад</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Предыдущий</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Следующий</span>
                </button>
            </div>
        </div>
        <div class="feedback-div">
            <img src="/png/left-orange.png" alt="background-col">
            <a href="#" class="feedback">Читать все отзывы</a>
        </div>
    </div>
    <div class="container">
        <div class="row mb-2">
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">

                        <h3 class="mb-0 union1">Вступай в группу <span class="union">единомышленников!</span></h3>

                        <p class="card-text mb-auto my-custom-class-invite">В ближайшее время будет создана закрытая группа
                            для управленцев
                            C-level
                            (CEO, CMO, CFO, COO, HRD и т.д.), в которой будет больше свободы для нетворкинга, и обсуждения
                            более масштабных проектов. Естественно будут инсайты и бизнес завтраки вместе с экспертами
                            представленными на моей платформе. Группа будет ограничена по количеству участников, а уже потом
                            и вовсе станет платной. Так что успей подать заявку!
                        </p>
                        <form action="" method="post">
                            @csrf
                            <div class="mb-3 mt-3">
                                <input type="email" class="form-control" id="id="emailInput"
                                    placeholder="name@example.com">
                            </div>
                            <div class="mb-3">
                                
                                <input type="tel" class="form-control" id="telInput"
                                    placeholder="+7 777 777 77 77">
                            </div>
                            <div class="col-auto">
                                <button type="submit" class="my-custom-class-button1 mb-3">Отправить</button>
                            </div>
                        </form>

                        <img src="/svg/logo.svg" alt="Logo" width="168.41" height="45.36"
                            class="my-custom-class-logo">
                    </div>

                    <div class="col-auto d-none d-lg-block">

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row shadow-sm position-relative my-custom-class-man">

                    <div class="col-auto d-none d-lg-block">

                        <img src="/png/oman.png" alt="man" class="man-image">
                    </div>
                    <div class="my-3 my-custom-class-text5">
                        <h3 class="need">Затем мне это нужно?</h3>
                        <p class="my-custom-class-text6">
                            С недавнего времени , я понял, что пора нинать делиться своим опытом, знаниями, знакомствами,
                            и тем самым помогать собственникам бизнеса достигать их поставленные цели. Какими невероятными
                            бы они не казались.

                        </p>
                        <div class="col-auto">
                            <button type="submit" class="my-custom-class-button2 ">Получить консультацию</button>

                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                    <div class="col-md-4 d-flex align-items-center">
                        <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
                            <svg class="bi" width="30" height="24">
                                <use xlink:href="#bootstrap"></use>
                            </svg>
                        </a>
                        <span class="mb-3 mb-md-0 text-body-secondary">© 2023 Company, Inc</span>
                    </div>

                    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                        <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi"
                                    width="24" height="24">
                                    <use xlink:href="#twitter"></use>
                                </svg></a></li>
                        <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi"
                                    width="24" height="24">
                                    <use xlink:href="#instagram"></use>
                                </svg></a></li>
                        <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi"
                                    width="24" height="24">
                                    <use xlink:href="#facebook"></use>
                                </svg></a></li>
                    </ul>
                </footer>
            </div>
        @endsection
