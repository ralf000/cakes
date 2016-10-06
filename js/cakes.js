$(function () {
    $("#portfolio").elastic_grid({
        filterEffect: 'popup', // moveup, scaleup, fallperspective, fly, flip, helix, popup, random
        hoverDirection: true,
        hoverDelay: 0,
        hoverInverse: false,
        expandingSpeed: 500,
        expandingHeight: 570,
        exHideInfoBoxTitle: true,
        exControls: true,
        'items':
                [
                    {
                        'title': 'Замок из памперсов',
                        'description': 'Замок из памперсов, в котором живут два маленьких принца.<br>Практичный и интересный подарок, который точно запомнится своей оригинальностью!',
                        'thumbnail': ['img/thumbs/2/1.jpg', 'img/thumbs/2/2.jpg', 'img/thumbs/2/3.jpg'],
                        'large': ['img/2/1.jpg', 'img/2/2.jpg', 'img/2/3.jpg'],
                        'button_list':
                                [
                                    {'title': 'Хочу такой!', 'url': '#5'}
                                ],
                        'tags': ['Новинки']
                    },
                    {
                        'title': 'Коляска из подгузников',
                        'description': 'Милый и практичный подарок молодым родителям!',
                        'thumbnail': ['img/thumbs/1/1.jpg', 'img/thumbs/1/2.jpg', 'img/thumbs/1/3.jpg'],
                        'large': ['img/1/1.jpg', 'img/1/2.jpg', 'img/1/3.jpg'],
                        'button_list':
                                [
                                    {'title': 'Хочу такой!', 'url': '#5'}
                                ],
                        'tags': ['Популярные']
                    },
                    {
                        'title': 'Обезьянка-велосипедист',
                        'description': 'Тематический подарок для малышки, родившейся в год обезьянки :)',
                        'thumbnail': ['img/thumbs/3/1.jpg', 'img/thumbs/3/2.jpg'],
                        'large': ['img/3/1.jpg', 'img/3/2.jpg'],
                        'button_list':
                                [
                                    {'title': 'Хочу такой!', 'url': '#5'}
                                ],
                        'tags': ['Популярные']
                    },
                    {
                        'title': 'Тортик для мальчика',
                        'description': 'Тортик был сделан на заказ, из материалов заказчицы',
                        'thumbnail': ['img/thumbs/4/1.jpg'],
                        'large': ['img/4/1.jpg'],
                        'button_list':
                                [
                                    {'title': 'Хочу такой!', 'url': '#5'}
                                ],
                        'tags': ['Популярные', 'Классические', 'Новинки']
                    },
                    {
                        'title': 'Тортик "Морской котик"',
                        'description': 'Небольшой милейший тортик для прекрасного малыша!',
                        'thumbnail': ['img/thumbs/5/1.jpg', 'img/thumbs/5/2.jpg'],
                        'large': ['img/5/1.jpg', 'img/5/2.jpg'],
                        'button_list':
                                [
                                    {'title': 'Хочу такой!', 'url': '#5'}
                                ],
                        'tags': ['Классические']
                    },
                    {
                        'title': 'Торт "Для маленькой принцессы"',
                        'description': 'Прекрасный тортик для маленькой принцессы',
                        'thumbnail': ['img/thumbs/6/2.jpg', 'img/thumbs/6/1.jpg', 'img/thumbs/6/3.jpg'],
                        'large': ['img/6/2.jpg', 'img/6/1.jpg', 'img/6/3.jpg'],
                        'button_list':
                                [
                                    {'title': 'Хочу такой!', 'url': '#5'}
                                ],
                        'tags': ['Классические']
                    },
                    {
                        'title': 'Торт "Для мальчика"',
                        'description': 'Классический торт из памперсов для мальчика',
                        'thumbnail': ['img/thumbs/7/1.jpg'],
                        'large': ['img/7/1.jpg'],
                        'button_list':
                                [
                                    {'title': 'Хочу такой!', 'url': '#5'}
                                ],
                        'tags': ['Классические']
                    }
                    //                                {
                    //                                    'title': '"Совушка"',
                    //                                    'description': 'Классический торт из памперсов для мальчика',
                    //                                    'thumbnail': ['img/thumbs/8/1.jpg', 'img/thumbs/8/2.jpg'],
                    //                                    'large': ['img/8/1.jpg', 'img/8/2.jpg'],
                    //                                    'button_list':
                    //                                            [
                    //                                                {'title': 'Хочу такой!', 'url': '#'}
                    //                                            ],
                    //                                    'tags': ['Новинки']
                    //                                }
                ]
    });
});