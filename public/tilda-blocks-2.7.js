function t142_checkSize(recId) {
    var rec = document.getElementById('rec' + recId);
    if (!rec)
        return;
    var button = rec.querySelector('.t142__submit');
    if (!button)
        return;
    var buttonStyle = getComputedStyle(button, null);
    var buttonPaddingTop = parseInt(buttonStyle.paddingTop) || 0;
    var buttonPaddingBottom = parseInt(buttonStyle.paddingBottom) || 0;
    var buttonHeight = button.clientHeight - (buttonPaddingTop + buttonPaddingBottom) + 5;
    var textHeight = button.scrollHeight;
    if (buttonHeight < textHeight) {
        button.classList.add('t142__submit-overflowed')
    }
}
function t228__init(recid) {
    var rec = document.getElementById('rec' + recid);
    if (!rec)
        return;
    var menuBlock = rec.querySelector('.t228');
    var mobileMenu = rec.querySelector('.t228__mobile');
    var menuSubLinkItems = rec.querySelectorAll('.t-menusub__link-item');
    var rightBtn = rec.querySelector('.t228__right_buttons_but .t-btn');
    var mobileMenuPosition = mobileMenu ? mobileMenu.style.position || window.getComputedStyle(mobileMenu).position : '';
    var mobileMenuDisplay = mobileMenu ? mobileMenu.style.display || window.getComputedStyle(mobileMenu).display : '';
    var isFixedMobileMenu = mobileMenuPosition === 'fixed' && mobileMenuDisplay === 'block';
    var overflowEvent = document.createEvent('Event');
    var noOverflowEvent = document.createEvent('Event');
    overflowEvent.initEvent('overflow', !0, !0);
    noOverflowEvent.initEvent('nooverflow', !0, !0);
    if (menuBlock) {
        menuBlock.addEventListener('overflow', function() {
            t228_checkOverflow(recid)
        });
        $(menuBlock).on('overflow', function() {
            t228_checkOverflow(recid)
        });
        menuBlock.addEventListener('nooverflow', function() {
            t228_checkNoOverflow(recid)
        });
        $(menuBlock).on('nooverflow', function() {
            t228_checkNoOverflow(recid)
        })
    }
    rec.addEventListener('click', function(e) {
        var targetLink = e.target.closest('.t-menusub__target-link');
        if (targetLink && window.isMobile) {
            if (targetLink.classList.contains('t-menusub__target-link_active')) {
                if (menuBlock)
                    menuBlock.dispatchEvent(overflowEvent)
            } else {
                if (menuBlock)
                    menuBlock.dispatchEvent(noOverflowEvent)
            }
        }
        var currentLink = e.target.closest('.t-menu__link-item:not(.tooltipstered):not(.t-menusub__target-link):not(.t794__tm-link):not(.t966__tm-link):not(.t978__tm-link):not(.t978__menu-link)');
        if (currentLink && mobileMenu && isFixedMobileMenu)
            mobileMenu.click()
    });
    Array.prototype.forEach.call(menuSubLinkItems, function(linkItem) {
        linkItem.addEventListener('click', function() {
            if (mobileMenu && isFixedMobileMenu)
                mobileMenu.click()
        })
    });
    if (rightBtn) {
        rightBtn.addEventListener('click', function() {
            if (mobileMenu && isFixedMobileMenu)
                mobileMenu.click()
        })
    }
    if (menuBlock) {
        menuBlock.addEventListener('showME601a', function() {
            var menuLinks = rec.querySelectorAll('.t966__menu-link');
            Array.prototype.forEach.call(menuLinks, function(menuLink) {
                menuLink.addEventListener('click', function() {
                    if (mobileMenu && isFixedMobileMenu)
                        mobileMenu.click()
                })
            })
        })
    }
}
function t228_highlight() {
    var url = window.location.href;
    var pathname = window.location.pathname;
    if (url.substr(url.length - 1) === '/') {
        url = url.slice(0, -1)
    }
    if (pathname.substr(pathname.length - 1) === '/') {
        pathname = pathname.slice(0, -1)
    }
    if (pathname.charAt(0) === '/') {
        pathname = pathname.slice(1)
    }
    if (pathname === '') {
        pathname = '/'
    }
    var shouldBeActiveElements = document.querySelectorAll('.t228__list_item a[href=\'' + url + '\'], ' + '.t228__list_item a[href=\'' + url + '/\'], ' + '.t228__list_item a[href=\'' + pathname + '\'], ' + '.t228__list_item a[href=\'/' + pathname + '\'], ' + '.t228__list_item a[href=\'' + pathname + '/\'], ' + '.t228__list_item a[href=\'/' + pathname + '/\']');
    Array.prototype.forEach.call(shouldBeActiveElements, function(link) {
        link.classList.add('t-active')
    })
}
function t228_checkAnchorLinks(recid) {
    if (window.innerWidth >= 980) {
        var rec = document.getElementById('rec' + recid);
        var navLinks = rec ? rec.querySelectorAll('.t228__list_item a[href*=\'#\']') : [];
        navLinks = Array.prototype.filter.call(navLinks, function(navLink) {
            return !navLink.classList.contains('tooltipstered')
        });
        if (navLinks.length) {
            setTimeout(function() {
                t228_catchScroll(navLinks)
            }, 500)
        }
    }
}
function t228_checkOverflow(recid) {
    var rec = document.getElementById('rec' + recid);
    var menu = rec ? rec.querySelector('.t228') : null;
    if (!menu)
        return;
    var mobileContainer = document.querySelector('.t228__mobile_container');
    var mobileContainerHeight = t228_getFullHeight(mobileContainer);
    var windowHeight = document.documentElement.clientHeight;
    var menuPosition = menu.style.position || window.getComputedStyle(menu).position;
    if (menuPosition === 'fixed') {
        menu.classList.add('t228__overflow');
        menu.style.setProperty('height', (windowHeight - mobileContainerHeight) + 'px', 'important')
    }
}
function t228_checkNoOverflow(recid) {
    var rec = document.getElementById('rec' + recid);
    if (!rec)
        return !1;
    var menu = rec.querySelector('.t228');
    var menuPosition = menu ? menu.style.position || window.getComputedStyle(menu).position : '';
    if (menuPosition === 'fixed') {
        if (menu)
            menu.classList.remove('t228__overflow');
        if (menu)
            menu.style.height = 'auto'
    }
}
function t228_catchScroll(navLinks) {
    navLinks = Array.prototype.slice.call(navLinks);
    var clickedSectionID = null;
    var sections = [];
    var sectionToNavigationLinkID = {};
    var interval = 100;
    var lastCall;
    var timeoutID;
    navLinks = navLinks.reverse();
    navLinks.forEach(function(link) {
        var currentSection = t228_getSectionByHref(link);
        if (currentSection && currentSection.id) {
            sections.push(currentSection);
            sectionToNavigationLinkID[currentSection.id] = link
        }
    });
    sections.sort(function(a, b) {
        return b.getBoundingClientRect().top - a.getBoundingClientRect().top
    });
    t228_highlightNavLinks(navLinks, sections, sectionToNavigationLinkID, clickedSectionID);
    navLinks.forEach(function(navLink, i) {
        navLink.addEventListener('click', function() {
            var clickedSection = t228_getSectionByHref(navLink);
            if (!navLink.classList.contains('tooltipstered') && clickedSection && clickedSection.id) {
                navLinks.forEach(function(link, index) {
                    if (index === i) {
                        link.classList.add('t-active')
                    } else {
                        link.classList.remove('t-active')
                    }
                });
                clickedSectionID = clickedSection.id
            }
        })
    });
    window.addEventListener('scroll', function() {
        var dateNow = new Date().getTime();
        if (lastCall && dateNow < lastCall + interval) {
            clearTimeout(timeoutID);
            timeoutID = setTimeout(function() {
                lastCall = dateNow;
                clickedSectionID = t228_highlightNavLinks(navLinks, sections, sectionToNavigationLinkID, clickedSectionID)
            }, interval - (dateNow - lastCall))
        } else {
            lastCall = dateNow;
            clickedSectionID = t228_highlightNavLinks(navLinks, sections, sectionToNavigationLinkID, clickedSectionID)
        }
    })
}
function t228_getSectionByHref(curlink) {
    if (!curlink)
        return;
    var href = curlink.getAttribute('href');
    var curLinkValue = href ? href.replace(/\s+/g, '') : '';
    if (curLinkValue.indexOf('/') === 0)
        curLinkValue = curLinkValue.slice(1);
    if (href && curlink.matches('[href*="#rec"]')) {
        curLinkValue = curLinkValue.replace(/.*#/, '');
        return document.getElementById(curLinkValue)
    } else {
        var selector = href ? href.trim() : '';
        var slashIndex = selector.indexOf('#') !== -1 ? selector.indexOf('#') : !1;
        if (typeof slashIndex === 'number') {
            selector = selector.slice(slashIndex + 1)
        } else {
            slashIndex = selector.indexOf('/') !== -1 ? selector.indexOf('/') : !1;
            if (typeof slashIndex === 'number')
                selector = selector.slice(slashIndex + 1)
        }
        var fullSelector = '.r[data-record-type="215"] a[name="' + selector + '"]';
        return document.querySelector(fullSelector) ? document.querySelector(fullSelector).closest('.r') : null
    }
}
function t228_highlightNavLinks(navLinks, sections, sectionToNavigationLinkID, clickedSectionID) {
    var scrollPosition = window.pageYOffset;
    var scrollHeight = Math.max(document.body.scrollHeight, document.documentElement.scrollHeight, document.body.offsetHeight, document.documentElement.offsetHeight, document.body.clientHeight, document.documentElement.clientHeight);
    var returnValue = clickedSectionID;
    var lastSection = sections.length ? sections[sections.length - 1] : null;
    var lastSectionTopPos = lastSection ? lastSection.getAttribute('data-offset-top') : '0';
    lastSectionTopPos = parseInt(lastSectionTopPos, 10) || 0;
    if (sections.length && clickedSectionID === null && lastSectionTopPos > (scrollPosition + 300)) {
        navLinks.forEach(function(link) {
            link.classList.remove('t-active')
        });
        return null
    }
    for (var i = 0; i < sections.length; i++) {
        var sectionTopPos = sections[i].getBoundingClientRect().top + window.pageYOffset;
        var navLink = sections[i].id ? sectionToNavigationLinkID[sections[i].id] : null;
        if (scrollPosition + 300 >= sectionTopPos || i === 0 && scrollPosition >= scrollHeight - window.innerHeight) {
            if (clickedSectionID === null && navLink && !navLink.classList.contains('t-active')) {
                navLinks.forEach(function(link) {
                    link.classList.remove('t-active')
                });
                if (navLink)
                    navLink.classList.add('t-active');
                returnValue = null
            } else if (clickedSectionID !== null && sections[i].id && clickedSectionID === sections[i].id) {
                returnValue = null
            }
            break
        }
    }
    return returnValue
}
function t228_setWidth(recid) {
    var rec = document.getElementById('rec' + recid);
    if (!rec)
        return;
    var menuCenterSideList = rec.querySelectorAll('.t228__centerside');
    Array.prototype.forEach.call(menuCenterSideList, function(menuCenterSide) {
        menuCenterSide.classList.remove('t228__centerside_hidden')
    });
    if (window.innerWidth <= 980)
        return;
    var menuBlocks = rec.querySelectorAll('.t228');
    Array.prototype.forEach.call(menuBlocks, function(menu) {
        var maxWidth;
        var centerWidth = 0;
        var paddingWidth = 40;
        var leftSide = menu.querySelector('.t228__leftside');
        var rightSide = menu.querySelector('.t228__rightside');
        var menuList = menu.querySelector('.t228__list');
        var mainContainer = menu.querySelector('.t228__maincontainer');
        var leftContainer = menu.querySelector('.t228__leftcontainer');
        var rightContainer = menu.querySelector('.t228__rightcontainer');
        var centerContainer = menu.querySelector('.t228__centercontainer');
        var centerContainerLi = centerContainer ? centerContainer.querySelectorAll('li') : [];
        var leftContainerWidth = t228_getFullWidth(leftContainer);
        var rightContainerWidth = t228_getFullWidth(rightContainer);
        var mainContainerWidth = mainContainer ? mainContainer.offsetWidth : 0;
        var dataAlign = menu.getAttribute('data-menu-items-align');
        var isDataAlignCenter = dataAlign === 'center' || dataAlign === null;
        maxWidth = leftContainerWidth >= rightContainerWidth ? leftContainerWidth : rightContainerWidth;
        maxWidth = Math.ceil(maxWidth);
        Array.prototype.forEach.call(centerContainerLi, function(li) {
            centerWidth += t228_getFullWidth(li)
        });
        if (mainContainerWidth - (maxWidth * 2 + paddingWidth * 2) > centerWidth + 20) {
            if (isDataAlignCenter) {
                if (leftSide)
                    leftSide.style.minWidth = maxWidth + 'px';
                if (rightSide)
                    rightSide.style.minWidth = maxWidth + 'px';
                if (menuList)
                    menuList.classList.remove('t228__list_hidden')
            }
        } else {
            if (leftSide)
                leftSide.style.minWidth = maxWidth + '';
            if (rightSide)
                rightSide.style.minWidth = maxWidth + ''
        }
    })
}
function t228_getFullWidth(el) {
    if (!el)
        return 0;
    var marginLeft = el.style.marginLeft || window.getComputedStyle(el).marginLeft;
    var marginRight = el.style.marginRight || window.getComputedStyle(el).marginRight;
    marginLeft = parseInt(marginLeft, 10) || 0;
    marginRight = parseInt(marginRight, 10) || 0;
    return el.offsetWidth + marginLeft + marginRight
}
function t228_getFullHeight(el) {
    if (!el)
        return 0;
    var marginTop = el.style.marginTop || window.getComputedStyle(el).marginTop;
    var marginBottom = el.style.marginBottom || window.getComputedStyle(el).marginBottom;
    marginTop = parseInt(marginTop, 10) || 0;
    marginBottom = parseInt(marginBottom, 10) || 0;
    return el.offsetHeight + marginTop + marginBottom
}
function t228_setBg(recid) {
    var rec = document.getElementById('rec' + recid);
    if (!rec)
        return;
    var menuBlocks = rec.querySelectorAll('.t228');
    Array.prototype.forEach.call(menuBlocks, function(menu) {
        if (window.innerWidth > 980) {
            if (menu.getAttribute('data-bgcolor-setbyscript') === 'yes') {
                menu.style.backgroundColor = menu.getAttribute('data-bgcolor-rgba')
            }
        } else {
            menu.style.backgroundColor = menu.getAttribute('data-bgcolor-hex');
            menu.setAttribute('data-bgcolor-setbyscript', 'yes');
            if (menu.style.transform)
                menu.style.transform = '';
            if (menu.style.opacity)
                menu.style.opacity = ''
        }
    })
}
function t228_appearMenu(recid) {
    if (window.innerWidth <= 980)
        return;
    var rec = document.getElementById('rec' + recid);
    if (!rec)
        return !1;
    var menuBlocks = rec.querySelectorAll('.t228');
    Array.prototype.forEach.call(menuBlocks, function(menu) {
        var appearOffset = menu.getAttribute('data-appearoffset');
        if (appearOffset) {
            if (appearOffset.indexOf('vh') !== -1) {
                appearOffset = Math.floor((window.innerHeight * (parseInt(appearOffset) / 100)))
            }
            appearOffset = parseInt(appearOffset, 10);
            var menuHeight = menu.clientHeight;
            if (typeof appearOffset === 'number' && window.pageYOffset >= appearOffset) {
                if (menu.style.transform === 'translateY(-' + menuHeight + 'px)') {
                    t228_slideUpElement(menu, menuHeight, 'toBottom')
                }
            } else if (menu.style.transform === 'translateY(0px)') {
                t228_slideUpElement(menu, menuHeight, 'toTop')
            } else {
                menu.style.transform = 'translateY(-' + menuHeight + 'px)';
                menu.style.opacity = '0'
            }
        }
    })
}
function t228_changebgopacitymenu(recid) {
    if (window.innerWidth <= 980)
        return;
    var rec = document.getElementById('rec' + recid);
    if (!rec)
        return;
    var menuBlocks = rec.querySelectorAll('.t228');
    Array.prototype.forEach.call(menuBlocks, function(menu) {
        var bgColor = menu.getAttribute('data-bgcolor-rgba');
        var bgColorAfterScroll = menu.getAttribute('data-bgcolor-rgba-afterscroll');
        var bgOpacity = menu.getAttribute('data-bgopacity');
        var bgOpacityTwo = menu.getAttribute('data-bgopacity-two');
        var menuShadow = menu.getAttribute('data-menushadow') || '0';
        var menuShadowValue = menuShadow === '100' ? menuShadow : '0.' + menuShadow;
        menu.style.backgroundColor = window.pageYOffset > 20 ? bgColorAfterScroll : bgColor;
        if (window.pageYOffset > 20 && bgOpacityTwo === '0' || window.pageYOffset <= 20 && bgOpacity === '0.0' || menuShadow === ' ') {
            menu.style.boxShadow = 'none'
        } else {
            menu.style.boxShadow = '0px 1px 3px rgba(0,0,0,' + menuShadowValue + ')'
        }
    })
}
function t228_createMobileMenu(recid) {
    var rec = document.getElementById('rec' + recid);
    if (!rec)
        return;
    var menu = rec.querySelector('.t228');
    var burger = rec.querySelector('.t228__mobile');
    if (burger) {
        burger.addEventListener('click', function() {
            if (burger.classList.contains('t228_opened')) {
                t228_fadeOut(menu, 300);
                burger.classList.remove('t228_opened')
            } else {
                t228_fadeIn(menu, 300, function() {
                    if (menu.style.transform)
                        menu.style.transform = '';
                    if (menu.style.opacity)
                        menu.style.opacity = ''
                });
                burger.classList.add('t228_opened')
            }
        })
    }
    window.addEventListener('resize', t_throttle(function() {
        if (window.innerWidth > 980) {
            if (menu.style.opacity)
                menu.style.opacity = '';
            if (menu.style.display === 'none')
                menu.style.display = ''
        } else if (menu.style.transform)
            menu.style.transform = ''
    }))
}
function t228_fadeOut(element, duration, callback) {
    if (!element)
        return !1;
    var opacity = 1;
    duration = parseInt(duration, 10);
    var speed = duration > 0 ? duration / 10 : 40;
    var timer = setInterval(function() {
        element.style.opacity = opacity;
        opacity -= 0.1;
        if (opacity <= 0.1) {
            element.style.opacity = '0';
            element.style.display = 'none';
            if (typeof callback === 'function') {
                callback()
            }
            clearInterval(timer)
        }
    }, speed)
}
function t228_fadeIn(element, duration, callback) {
    if (!element)
        return !1;
    if ((getComputedStyle(element).opacity === '1' || getComputedStyle(element).opacity === '') && getComputedStyle(element).display !== 'none')
        return !1;
    var opacity = 0;
    duration = parseInt(duration, 10);
    var speed = duration > 0 ? duration / 10 : 40;
    element.style.opacity = opacity;
    element.style.display = 'block';
    var timer = setInterval(function() {
        element.style.opacity = opacity;
        opacity += 0.1;
        if (opacity >= 1) {
            element.style.opacity = '1';
            if (typeof callback === 'function') {
                callback()
            }
            clearInterval(timer)
        }
    }, speed)
}
function t228_slideUpElement(menu, menuHeight, position) {
    var diff = position === 'toTop' ? 0 : menuHeight;
    var diffOpacity = position === 'toTop' ? 1 : 0;
    var timerID = setInterval(function() {
        menu.style.transform = 'translateY(-' + diff + 'px)';
        menu.style.opacity = diffOpacity.toString();
        diffOpacity = position === 'toTop' ? diffOpacity - 0.1 : diffOpacity + 0.1;
        diff = position === 'toTop' ? diff + (menuHeight / 20) : diff - (menuHeight / 20);
        if (position === 'toTop' && diff >= menuHeight) {
            menu.style.transform = 'translateY(-' + menuHeight + 'px)';
            menu.style.opacity = '0';
            clearInterval(timerID)
        }
        if (position === 'toBottom' && diff <= 0) {
            menu.style.transform = 'translateY(0px)';
            menu.style.opacity = '1';
            clearInterval(timerID)
        }
    }, 10)
}
function t454_highlight() {
    var url = window.location.href;
    var pathname = window.location.pathname;
    if (url.substr(url.length - 1) === '/') {
        url = url.slice(0, -1)
    }
    if (pathname.substr(pathname.length - 1) === '/') {
        pathname = pathname.slice(0, -1)
    }
    if (pathname.charAt(0) === '/') {
        pathname = pathname.slice(1)
    }
    if (pathname === '') {
        pathname = '/'
    }
    var shouldBeActiveElements = document.querySelectorAll('.t454__list_item a[href=\'' + url + '\'], ' + '.t454__list_item a[href=\'' + url + '/\'], ' + '.t454__list_item a[href=\'' + pathname + '\'], ' + '.t454__list_item a[href=\'/' + pathname + '\'], ' + '.t454__list_item a[href=\'' + pathname + '/\'], ' + '.t454__list_item a[href=\'/' + pathname + '/\']');
    Array.prototype.forEach.call(shouldBeActiveElements, function(link) {
        link.classList.add('t-active')
    })
}
function t454_checkAnchorLinks(recid) {
    var rec = document.getElementById('rec' + recid);
    if (!rec || window.innerWidth < 980)
        return;
    var navLinks = rec.querySelectorAll('.t454__list_item a[href*=\'#\']');
    navLinks = Array.prototype.filter.call(navLinks, function(navLink) {
        return !navLink.classList.contains('tooltipstered')
    });
    if (navLinks.length) {
        t454_catchScroll(navLinks)
    }
}
function t454_catchScroll(navLinks) {
    navLinks = Array.prototype.slice.call(navLinks);
    var clickedSectionID = null;
    var sections = [];
    var sectionToNavigationLinkID = {};
    var interval = 100;
    var lastCall;
    var timeoutID;
    navLinks = navLinks.reverse();
    navLinks.forEach(function(link) {
        var currentSection = t454_getSectionByHref(link);
        if (currentSection && currentSection.id) {
            sections.push(currentSection);
            sectionToNavigationLinkID[currentSection.id] = link
        }
    });
    t454_updateSectionsOffsets(sections);
    sections.sort(function(a, b) {
        var firstTopOffset = parseInt(a.getAttribute('data-offset-top'), 10) || 0;
        var secondTopOffset = parseInt(b.getAttribute('data-offset-top'), 10) || 0;
        return secondTopOffset - firstTopOffset
    });
    window.addEventListener('resize', t_throttle(function() {
        t454_updateSectionsOffsets(sections)
    }, 200));
    if (typeof jQuery !== 'undefined') {
        $('.t454').bind('displayChanged', function() {
            t454_updateSectionsOffsets(sections)
        })
    } else {
        var menuEls = document.querySelectorAll('.t454');
        Array.prototype.forEach.call(menuEls, function(menu) {
            menu.addEventListener('displayChanged', function() {
                t454_updateSectionsOffsets(sections)
            })
        })
    }
    setInterval(function() {
        t454_updateSectionsOffsets(sections)
    }, 5000);
    t454_highlightNavLinks(navLinks, sections, sectionToNavigationLinkID, clickedSectionID);
    navLinks.forEach(function(navLink, i) {
        navLink.addEventListener('click', function() {
            var clickedSection = t454_getSectionByHref(navLink);
            if (!navLink.classList.contains('tooltipstered') && clickedSection && clickedSection.id) {
                navLinks.forEach(function(link, index) {
                    if (index === i) {
                        link.classList.add('t-active')
                    } else {
                        link.classList.remove('t-active')
                    }
                });
                clickedSectionID = clickedSection.id
            }
        })
    });
    window.addEventListener('scroll', function() {
        var dateNow = new Date().getTime();
        if (lastCall && dateNow < lastCall + interval) {
            clearTimeout(timeoutID);
            timeoutID = setTimeout(function() {
                lastCall = dateNow;
                clickedSectionID = t454_highlightNavLinks(navLinks, sections, sectionToNavigationLinkID, clickedSectionID)
            }, interval - (dateNow - lastCall))
        } else {
            lastCall = dateNow;
            clickedSectionID = t454_highlightNavLinks(navLinks, sections, sectionToNavigationLinkID, clickedSectionID)
        }
    })
}
function t454_updateSectionsOffsets(sections) {
    sections.forEach(function(section) {
        var sectionTopPos = section.getBoundingClientRect().top + window.pageYOffset;
        section.setAttribute('data-offset-top', sectionTopPos)
    })
}
function t454_getSectionByHref(curlink) {
    if (!curlink)
        return;
    var href = curlink.getAttribute('href');
    var curLinkValue = href ? href.replace(/\s+/g, '') : '';
    if (curLinkValue.indexOf('/') === 0)
        curLinkValue = curLinkValue.slice(1);
    if (href && curlink.matches('[href*="#rec"]')) {
        curLinkValue = curLinkValue.replace(/.*#/, '');
        return document.getElementById(curLinkValue)
    } else {
        var selector = href ? href.trim() : '';
        var slashIndex = selector.indexOf('#') !== -1 ? selector.indexOf('#') : !1;
        if (typeof slashIndex === 'number') {
            selector = selector.slice(slashIndex + 1)
        } else {
            slashIndex = selector.indexOf('/') !== -1 ? selector.indexOf('/') : !1;
            if (typeof slashIndex === 'number')
                selector = selector.slice(slashIndex + 1)
        }
        var fullSelector = '.r[data-record-type="215"] a[name="' + selector + '"]';
        return document.querySelector(fullSelector) ? document.querySelector(fullSelector).closest('.r') : null
    }
}
function t454_highlightNavLinks(navLinks, sections, sectionToNavigationLinkID, clickedSectionID) {
    var scrollPosition = window.pageYOffset;
    var scrollHeight = Math.max(document.body.scrollHeight, document.documentElement.scrollHeight, document.body.offsetHeight, document.documentElement.offsetHeight, document.body.clientHeight, document.documentElement.clientHeight);
    var returnValue = clickedSectionID;
    var lastSection = sections.length ? sections[sections.length - 1] : null;
    var lastSectionTopPos = lastSection ? lastSection.getAttribute('data-offset-top') : '0';
    lastSectionTopPos = parseInt(lastSectionTopPos, 10) || 0;
    if (sections.length && clickedSectionID === null && lastSectionTopPos > (scrollPosition + 300)) {
        navLinks.forEach(function(link) {
            link.classList.remove('t-active')
        });
        return null
    }
    for (var i = 0; i < sections.length; i++) {
        var sectionTopPos = sections[i].getAttribute('data-offset-top');
        var navLink = sections[i].id ? sectionToNavigationLinkID[sections[i].id] : null;
        if (scrollPosition + 300 >= sectionTopPos || i === 0 && scrollPosition >= scrollHeight - window.innerHeight) {
            if (clickedSectionID === null && navLink && !navLink.classList.contains('t-active')) {
                navLinks.forEach(function(link) {
                    link.classList.remove('t-active')
                });
                if (navLink)
                    navLink.classList.add('t-active');
                returnValue = null
            } else if (clickedSectionID !== null && sections[i].id && clickedSectionID === sections[i].id) {
                returnValue = null
            }
            break
        }
    }
    return returnValue
}
function t454_setBg(recid) {
    var menuBlocks = document.querySelectorAll('.t454');
    Array.prototype.forEach.call(menuBlocks, function(menu) {
        if (window.innerWidth > 980) {
            if (menu.getAttribute('data-bgcolor-setbyscript') === 'yes') {
                menu.style.backgroundColor = menu.getAttribute('data-bgcolor-rgba')
            }
        } else {
            menu.style.backgroundColor = menu.getAttribute('data-bgcolor-hex');
            menu.setAttribute('data-bgcolor-setbyscript', 'yes');
            if (menu.style.transform)
                menu.style.transform = '';
            if (menu.style.opacity)
                menu.style.opacity = ''
        }
    })
}
function t454_appearMenu(recid) {
    if (window.innerWidth <= 980)
        return;
    var menuBlocks = document.querySelectorAll('.t454');
    Array.prototype.forEach.call(menuBlocks, function(menu) {
        var appearOffset = menu.getAttribute('data-appearoffset');
        if (appearOffset) {
            if (appearOffset.indexOf('vh') !== -1) {
                appearOffset = Math.floor((window.innerHeight * (parseInt(appearOffset) / 100)))
            }
            appearOffset = parseInt(appearOffset, 10);
            var menuHeight = menu.clientHeight;
            if (typeof appearOffset === 'number' && window.pageYOffset >= appearOffset) {
                if (menu.style.transform === 'translateY(-' + menuHeight + 'px)') {
                    t454_slideUpElement(menu, menuHeight, 'toBottom')
                }
            } else if (menu.style.transform === 'translateY(0px)') {
                t454_slideUpElement(menu, menuHeight, 'toTop')
            } else {
                menu.style.transform = 'translateY(-' + menuHeight + 'px)';
                menu.style.opacity = '0'
            }
        }
    })
}
function t454_slideUpElement(menu, menuHeight, direction) {
    var diff = direction === 'toTop' ? 0 : menuHeight;
    var diffOpacity = direction === 'toTop' ? 1 : 0;
    var timerID = setInterval(function() {
        menu.style.transform = 'translateY(-' + diff + 'px)';
        menu.style.opacity = diffOpacity.toString();
        diffOpacity = direction === 'toTop' ? diffOpacity - 0.1 : diffOpacity + 0.1;
        diff = direction === 'toTop' ? diff + (menuHeight / 20) : diff - (menuHeight / 20);
        if (direction === 'toTop' && diff >= menuHeight) {
            menu.style.transform = 'translateY(-' + menuHeight + 'px)';
            menu.style.opacity = '0';
            clearInterval(timerID)
        }
        if (direction === 'toBottom' && diff <= 0) {
            menu.style.transform = 'translateY(0px)';
            menu.style.opacity = '1';
            clearInterval(timerID)
        }
    }, 10)
}
function t454_changebgopacitymenu(recid) {
    if (window.innerWidth <= 980)
        return;
    var menuBlocks = document.querySelectorAll('.t454');
    Array.prototype.forEach.call(menuBlocks, function(menu) {
        var bgColor = menu.getAttribute('data-bgcolor-rgba');
        var bgColorAfterScroll = menu.getAttribute('data-bgcolor-rgba-afterscroll');
        var bgOpacity = menu.getAttribute('data-bgopacity');
        var bgOpacityTwo = menu.getAttribute('data-bgopacity-two');
        var menuShadow = menu.getAttribute('data-menushadow') || '0';
        var menuShadowValue = menuShadow === '100' ? menuShadow : '0.' + menuShadow;
        menu.style.backgroundColor = window.pageYOffset > 20 ? bgColorAfterScroll : bgColor;
        if (window.pageYOffset > 20 && bgOpacityTwo === '0' || window.pageYOffset <= 20 && bgOpacity === '0.0' || menuShadow === ' ') {
            menu.style.boxShadow = 'none'
        } else {
            menu.style.boxShadow = '0px 1px 3px rgba(0,0,0,' + menuShadowValue + ')'
        }
    })
}
function t454_createMobileMenu(recid) {
    var rec = document.getElementById('rec' + recid);
    if (!rec)
        return;
    var menu = rec.querySelector('.t454');
    var burger = rec.querySelector('.t454__mobile');
    if (burger) {
        burger.addEventListener('click', function() {
            if (burger.classList.contains('t454_opened')) {
                t454_fadeOut(menu, 300);
                burger.classList.remove('t454_opened')
            } else {
                t454_fadeIn(menu, 300, function() {
                    if (menu.style.transform)
                        menu.style.transform = '';
                    if (menu.style.opacity)
                        menu.style.opacity = ''
                });
                burger.classList.add('t454_opened')
            }
        })
    }
    window.addEventListener('resize', t_throttle(function() {
        if (window.innerWidth > 980) {
            if (menu)
                menu.style.opacity = '';
            if (menu)
                menu.style.display = '';
            if (burger)
                burger.classList.remove('t454_opened')
        }
    }, 200))
}
function t454_setLogoPadding(recid) {
    var rec = document.getElementById('rec' + recid);
    if (!rec || window.innerWidth <= 980)
        return;
    var menu = rec.querySelector('.t454');
    var logo = menu ? menu.querySelector('.t454__logowrapper') : null;
    var leftWrapper = menu ? menu.querySelector('.t454__leftwrapper') : null;
    var rightWrapper = menu ? menu.querySelector('.t454__rightwrapper') : null;
    var logoWidth = logo ? logo.offsetWidth : 0;
    var updateWidth = (logoWidth / 2) + 50;
    if (leftWrapper)
        leftWrapper.style.paddingRight = updateWidth + 'px';
    if (rightWrapper)
        rightWrapper.style.paddingLeft = updateWidth + 'px'
}
function t454_fadeOut(element, duration, callback) {
    if (!element)
        return !1;
    var opacity = 1;
    duration = parseInt(duration, 10);
    var speed = duration > 0 ? duration / 10 : 40;
    var timer = setInterval(function() {
        element.style.opacity = opacity;
        opacity -= 0.1;
        if (opacity <= 0.1) {
            element.style.opacity = '0';
            element.style.display = 'none';
            if (typeof callback === 'function') {
                callback()
            }
            clearInterval(timer)
        }
    }, speed)
}
function t454_fadeIn(element, duration, callback) {
    if (!element)
        return !1;
    if ((getComputedStyle(element).opacity === '1' || getComputedStyle(element).opacity === '') && getComputedStyle(element).display !== 'none')
        return !1;
    var opacity = 0;
    duration = parseInt(duration, 10);
    var speed = duration > 0 ? duration / 10 : 40;
    element.style.opacity = opacity;
    element.style.display = 'block';
    var timer = setInterval(function() {
        element.style.opacity = opacity;
        opacity += 0.1;
        if (opacity >= 1) {
            element.style.opacity = '1';
            if (typeof callback === 'function') {
                callback()
            }
            clearInterval(timer)
        }
    }, speed)
}
function t598_init(recId) {
    var rec = document.getElementById('rec' + recId);
    if (!rec)
        return;
    var container = rec.querySelector('.t598');
    if (!container)
        return;
    t598_setEqualHeight(recId);
    window.addEventListener('resize', t_throttle(function() {
        t598_setEqualHeight(recId)
    }));
    if (typeof jQuery !== 'undefined') {
        $(container).on('displayChanged', function() {
            t598_setEqualHeight(recId)
        })
    } else {
        container.addEventListener('displayChanged', function() {
            t598_setEqualHeight(recId)
        })
    }
}
function t598_setEqualHeight(recId) {
    var rec = document.getElementById('rec' + recId);
    if (!rec)
        return;
    var container = rec.querySelector('.t598');
    if (!container)
        return;
    var titles = rec.querySelectorAll('.t598__title');
    var descriptions = rec.querySelectorAll('.t598__descr');
    var prices = rec.querySelectorAll('.t598__price');
    var imageWrappers = rec.querySelectorAll('.t598__imgwrapper');
    if (titles.length > 0)
        t598_updateHeight(titles);
    if (descriptions.length > 0)
        t598_updateHeight(descriptions);
    if (prices.length > 0)
        t598_updateHeight(prices);
    if (imageWrappers.length > 0) {
        t598_updateHeight(imageWrappers);
        window.onload = function() {
            t598_updateHeight(imageWrappers)
        }
    }
}
function t598_updateHeight(elements) {
    var maxHeight = 0;
    for (var i = 0; i < elements.length; i++) {
        elements[i].style.height = ''
    }
    for (var i = 0; i < elements.length; i++) {
        var element = elements[i];
        var elementStyle = getComputedStyle(element, null);
        var elementPaddingTop = parseInt(elementStyle.paddingTop) || 0;
        var elementPaddingBottom = parseInt(elementStyle.paddingBottom) || 0;
        var elementHeight = element.clientHeight - (elementPaddingTop + elementPaddingBottom);
        if (elementHeight > maxHeight)
            maxHeight = elementHeight
    }
    if (window.innerWidth >= 960) {
        for (var i = 0; i < elements.length; i++) {
            elements[i].style.height = maxHeight + 'px'
        }
    } else {
        for (var i = 0; i < elements.length; i++) {
            elements[i].style.height = ''
        }
    }
}
function t678_onSuccess(form) {
    if (!(form instanceof Element))
        form = form[0];
    var inputsWrapper = form.querySelector('.t-form__inputsbox');
    var inputsWrapperStyle = getComputedStyle(inputsWrapper, null);
    var inputsWrapperPaddingTop = parseInt(inputsWrapperStyle.paddingTop) || 0;
    var inputsWrapperPaddingBottom = parseInt(inputsWrapperStyle.paddingBottom) || 0;
    var inputsWrapperHeight = inputsWrapper.clientHeight - (inputsWrapperPaddingTop + inputsWrapperPaddingBottom);
    var inputsOffset = inputsWrapper.getBoundingClientRect().top + window.pageYOffset;
    var inputsBottom = inputsWrapperHeight + inputsOffset;
    var successBox = form.querySelector('.t-form__successbox');
    var successBoxOffset = successBox.getBoundingClientRect().top + window.pageYOffset;
    var target = 0;
    var windowHeight = window.innerHeight;
    var body = document.body;
    var html = document.documentElement;
    var documentHeight = Math.max(body.scrollHeight, body.offsetHeight, html.clientHeight, html.scrollHeight, html.offsetHeight);
    if (window.innerWidth > 960) {
        target = successBoxOffset - 200
    } else {
        target = successBoxOffset - 100
    }
    var tildaLabel = document.querySelector('.t-tildalabel');
    if (successBoxOffset > window.scrollY || (documentHeight - inputsBottom) < (windowHeight - 100)) {
        inputsWrapper.classList.add('t678__inputsbox_hidden');
        setTimeout(function() {
            if (windowHeight > documentHeight && tildaLabel) {
                t678__fadeOut(tildaLabel, 50)
            }
        }, 300)
    } else {
        t678__scroll(target);
        setTimeout(function() {
            inputsWrapper.classList.add('t678__inputsbox_hidden')
        }, 400)
    }
    var successUrl = $(form).data('success-url');
    if (successUrl) {
        setTimeout(function() {
            window.location.href = successUrl
        }, 500)
    }
}
function t678__fadeOut(el) {
    if (el.style.display === 'none')
        return;
    var opacity = 1;
    var timer = setInterval(function() {
        el.style.opacity = opacity;
        opacity -= 0.1;
        if (opacity <= 0.1) {
            clearInterval(timer);
            el.style.display = 'none';
            el.style.opacity = null
        }
    }, 50)
}
function t678__scroll(target) {
    var duration = 400;
    var start = (window.pageYOffset || document.documentElement.scrollTop) - (document.documentElement.clientTop || 0);
    var change = target - start;
    var currentTime = 0;
    var increment = 16;
    document.body.setAttribute('data-scrollable', 'true');
    function t678__easeInOutCubic(currentTime, change) {
        if ((currentTime /= duration / 2) < 1) {
            return change / 2 * currentTime * currentTime * currentTime + start
        } else {
            return change / 2 * ((currentTime -= 2) * currentTime * currentTime + 2) + start
        }
    }
    function t678__animateScroll() {
        currentTime += increment;
        window.scrollTo(0, t678__easeInOutCubic(currentTime, change));
        if (currentTime < duration) {
            setTimeout(t678__animateScroll, increment)
        } else {
            document.body.removeAttribute('data-scrollable')
        }
    }
    t678__animateScroll()
}
function t690_onSuccess(form) {
    if (!(form instanceof Element))
        form = form[0];
    var inputsWrapper = form.querySelector('.t-form__inputsbox');
    var inputsWrapperStyle = getComputedStyle(inputsWrapper, null);
    var inputsWrapperPaddingTop = parseInt(inputsWrapperStyle.paddingTop) || 0;
    var inputsWrapperPaddingBottom = parseInt(inputsWrapperStyle.paddingBottom) || 0;
    var inputsWrapperHeight = inputsWrapper.clientHeight - (inputsWrapperPaddingTop + inputsWrapperPaddingBottom);
    var inputsOffset = inputsWrapper.getBoundingClientRect().top + window.pageYOffset;
    var inputsBottom = inputsWrapperHeight + inputsOffset;
    var successBox = form.querySelector('.t-form__successbox');
    var successBoxOffset = successBox.getBoundingClientRect().top + window.pageYOffset;
    var target = 0;
    var windowHeight = window.innerHeight;
    var body = document.body;
    var html = document.documentElement;
    var documentHeight = Math.max(body.scrollHeight, body.offsetHeight, html.clientHeight, html.scrollHeight, html.offsetHeight);
    if (window.innerWidth > 960) {
        target = successBoxOffset - 200
    } else {
        target = successBoxOffset - 100
    }
    var tildaLabel = document.querySelector('.t-tildalabel');
    if (successBoxOffset > window.scrollY || (documentHeight - inputsBottom) < (windowHeight - 100)) {
        inputsWrapper.classList.add('t690__inputsbox_hidden');
        setTimeout(function() {
            if (windowHeight > documentHeight && tildaLabel) {
                t690__fadeOut(tildaLabel)
            }
        }, 300)
    } else {
        t690__scroll(target);
        setTimeout(function() {
            inputsWrapper.classList.add('t690__inputsbox_hidden')
        }, 400)
    }
    var successUrl = $(form).data('success-url');
    if (successUrl) {
        setTimeout(function() {
            window.location.href = successUrl
        }, 500)
    }
}
function t690__fadeOut(el) {
    if (el.style.display === 'none')
        return;
    var opacity = 1;
    var timer = setInterval(function() {
        el.style.opacity = opacity;
        opacity -= 0.1;
        if (opacity <= 0.1) {
            clearInterval(timer);
            el.style.display = 'none';
            el.style.opacity = null
        }
    }, 50)
}
function t690__scroll(target) {
    var duration = 400;
    var start = (window.pageYOffset || document.documentElement.scrollTop) - (document.documentElement.clientTop || 0);
    var change = target - start;
    var currentTime = 0;
    var increment = 16;
    document.body.setAttribute('data-scrollable', 'true');
    function t690__easeInOutCubic(currentTime, change) {
        if ((currentTime /= duration / 2) < 1) {
            return change / 2 * currentTime * currentTime * currentTime + start
        } else {
            return change / 2 * ((currentTime -= 2) * currentTime * currentTime + 2) + start
        }
    }
    function t690__animateScroll() {
        currentTime += increment;
        window.scrollTo(0, t690__easeInOutCubic(currentTime, change));
        if (currentTime < duration) {
            setTimeout(t690__animateScroll, increment)
        } else {
            document.body.removeAttribute('data-scrollable')
        }
    }
    t690__animateScroll()
}
function t829_init(recId) {
    var rec = document.getElementById('rec' + recId);
    if (!rec)
        return;
    var container = rec.querySelector('.t829');
    if (!container)
        return;
    var grid = rec.querySelector('.t829__grid');
    var sizer = rec.querySelector('.t829__grid-sizer');
    var items = rec.querySelectorAll('.t829__grid-item');
    var images = grid.querySelectorAll('img');
    var sizerWidth = parseInt(getComputedStyle(sizer, null).width);
    for (var i = 0; i < images.length; i++) {
        images[i].addEventListener('load', function() {
            if (!(grid.classList.contains('t829__container_mobile-flex') && window.innerWidth < 768)) {
                t829_initMasonry(rec, recId, grid)
            }
        })
    }
    if (!(grid.classList.contains('t829__container_mobile-flex') && window.innerWidth < 768)) {
        t829_initMasonry(rec, recId, grid);
        t829_calcColumnWidth(rec, sizerWidth, grid, sizer, items)
    }
    grid.addEventListener('touchmove', t829__updateLazyLoad);
    grid.addEventListener('scroll', t829__updateLazyLoad);
    window.addEventListener('resize', t_throttle(function() {
        if (window.noAdaptive && window.noAdaptive === !0 && window.isMobile)
            return;
        if (!(grid.classList.contains('t829__container_mobile-flex'))) {
            t829_initMasonry(rec, recId, grid)
        }
        if (grid.classList.contains('t829__container_mobile-flex') && window.innerWidth >= 768) {
            t829_initMasonry(rec, recId, grid)
        }
        if (!(grid.classList.contains('t829__container_mobile-flex') && window.innerWidth < 768)) {
            t829_calcColumnWidth(rec, sizerWidth, grid, sizer, items)
        }
    }));
    if (typeof jQuery !== 'undefined') {
        $(container).bind('displayChanged', function() {
            if (!(grid.classList.contains('t829__container_mobile-flex'))) {
                t829_initMasonry(rec, recId, grid)
            }
            if (grid.classList.contains('t829__container_mobile-flex') && window.innerWidth >= 768) {
                t829_initMasonry(rec, recId, grid)
            }
            if (!(grid.classList.contains('t829__container_mobile-flex') && window.innerWidth < 768)) {
                t829_calcColumnWidth(rec, sizerWidth, grid, sizer, items)
            }
        })
    } else {
        container.addEventListener('displayChanged', function() {
            if (!(grid.classList.contains('t829__container_mobile-flex'))) {
                t829_initMasonry(rec, recId, grid)
            }
            if (grid.classList.contains('t829__container_mobile-flex') && window.innerWidth >= 768) {
                t829_initMasonry(rec, recId, grid)
            }
            if (!(grid.classList.contains('t829__container_mobile-flex') && window.innerWidth < 768)) {
                t829_calcColumnWidth(rec, startContainerWidth, grid, sizer, items)
            }
        })
    }
}
function t829_initMasonry(rec, recId, grid) {
    if (!rec)
        return;
    var gutterSizer = rec.querySelector('.t829__gutter-sizer');
    if (!gutterSizer)
        return;
    gutterSizer.style.width = '';
    var gutterSizerWidth = parseInt(getComputedStyle(gutterSizer, null).width);
    var gutterElement = (gutterSizerWidth === 40) ? 39 : '#rec' + recId + ' .t829__gutter-sizer';
    t_onFuncLoad('imagesLoaded', function() {
        imagesLoaded(grid, function() {
            new Masonry(grid,{
                itemSelector: '#rec' + recId + ' .t829__grid-item',
                columnWidth: '#rec' + recId + ' .t829__grid-sizer',
                gutter: gutterElement,
                isFitWidth: !0,
                transitionDuration: 0
            })
        })
    })
}
function t829_calcColumnWidth(rec, sizerWidth, grid, sizer, items) {
    if (!rec)
        return;
    var container = rec.querySelector('.t829__container');
    if (!container)
        return;
    grid.style.width = '';
    for (var i = 0; i < items.length; i++) {
        items[i].style.width = ''
    }
    if (sizerWidth === 0) {
        var sizerStyle = getComputedStyle(sizer, null);
        var sizerPaddingLeft = parseInt(sizerStyle.paddingLeft) || 0;
        var sizerPaddingRight = parseInt(sizerStyle.paddingRight) || 0;
        sizerWidth = sizer.clientWidth - (sizerPaddingLeft + sizerPaddingRight)
    }
    var containerStyle = getComputedStyle(container, null);
    var containerPaddingLeft = parseInt(containerStyle.paddingLeft) || 0;
    var containerPaddingRight = parseInt(containerStyle.paddingRight) || 0;
    var containerWidth = container.clientWidth - (containerPaddingLeft + containerPaddingRight);
    if (!items[0])
        return;
    var itemStyle = getComputedStyle(items[0], null);
    var itemPaddingLeft = parseInt(itemStyle.paddingLeft) || 0;
    var itemPaddingRight = parseInt(itemStyle.paddingRight) || 0;
    var itemWidth = items[0].clientWidth - (itemPaddingLeft + itemPaddingRight);
    var gutterSizer = rec.querySelector('.t829__gutter-sizer');
    var gutterSizerStyle = getComputedStyle(gutterSizer, null);
    var gutterSizerPaddingLeft = parseInt(gutterSizerStyle.paddingLeft) || 0;
    var gutterSizerPaddingRight = parseInt(gutterSizerStyle.paddingRight) || 0;
    var gutterSizerWidth = gutterSizer.clientWidth - (gutterSizerPaddingLeft + gutterSizerPaddingRight);
    if (gutterSizerWidth === 40)
        gutterSizerWidth = 39;
    var colAmount = Math.round(containerWidth / sizerWidth);
    var newSizerWidth = Math.floor((containerWidth - gutterSizerWidth * (colAmount - 1)) / colAmount);
    if (containerWidth >= itemWidth) {
        sizer.style.width = newSizerWidth + 'px';
        for (var i = 0; i < items.length; i++) {
            items[i].style.width = newSizerWidth + 'px'
        }
    } else {
        grid.style.width = '100%';
        sizer.style.width = '100%';
        for (var i = 0; i < items.length; i++) {
            items[i].style.width = '100%'
        }
    }
}
function t829__updateLazyLoad() {
    var allRecords = document.getElementById('allrecords');
    if (!allRecords.getAttribute('data-tilda-mode')) {
        if (window.lazy === 'y' || allRecords.getAttribute('data-tilda-lazy') === 'yes') {
            t_onFuncLoad('t_lazyload_update', function() {
                t_lazyload_update()
            })
        }
    }
}
function t842_init(recId) {
    var rec = document.getElementById('rec' + recId);
    if (!rec)
        return;
    var container = rec.querySelector('.t842');
    if (!container)
        return;
    t842_unifyHeights(recId);
    window.addEventListener('resize', t_throttle(function() {
        if (window.noAdaptive && window.noAdaptive === !0 && window.isMobile)
            return;
        t842_unifyHeights(recId)
    }));
    window.addEventListener('load', function() {
        t842_unifyHeights(recId)
    });
    if (typeof jQuery !== 'undefined') {
        $(container).on('displayChanged', function() {
            t842_unifyHeights(recId)
        })
    } else {
        container.addEventListener('displayChanged', function() {
            t842_unifyHeights(recId)
        })
    }
    if (container && container.classList.contains('t842__previewmode')) {
        setInterval(function() {
            t842_unifyHeights(recId)
        }, 5000)
    }
}
function t842_unifyHeights(recId) {
    var rec = document.getElementById('rec' + recId);
    if (!rec)
        return;
    var container = rec.querySelector('.t842');
    if (!container)
        return;
    if (window.innerWidth >= 960) {
        var rows = container.querySelectorAll('.t842__row');
        for (var i = 0; i < rows.length; i++) {
            var row = rows[i];
            var maxHeight = 0;
            var cols = row.querySelectorAll('.t842__inner-col');
            var bgImages = row.querySelectorAll('.t842__bgimg');
            for (var j = 0; j < cols.length; j++) {
                var col = cols[j];
                var colWrap = col.querySelector('.t842__wrap');
                var colHeight = colWrap.offsetHeight;
                if (colHeight > maxHeight)
                    maxHeight = colHeight
            }
            for (var j = 0; j < cols.length; j++) {
                cols[j].style.height = maxHeight + 'px'
            }
            for (var j = 0; j < bgImages.length; j++) {
                bgImages[j].style.height = maxHeight + 'px'
            }
        }
    } else {
        var cols = rec.querySelectorAll('.t842__inner-col');
        var bgImages = rec.querySelectorAll('.t842__bgimg');
        for (var i = 0; i < cols.length; i++) {
            cols[i].style.height = 'auto'
        }
        for (var i = 0; i < bgImages.length; i++) {
            bgImages[i].style.height = 'auto'
        }
    }
}
