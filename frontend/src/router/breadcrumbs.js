import { useRoute } from 'vue-router'

const breadcrumbs = {
  top: {
    title: 'TOP',
    parent: null,
  },
  user_show: {
    title: 'アカウント詳細',
    parent: 'top',
  },
  user_edit: {
    title: 'アカウント設定',
    parent: 'user_show',
  },
  user_follow: {
    title: 'フォロー一覧',
    parent: 'user_show',
  },
  user_follower: {
    title: 'フォロワーー一覧',
    parent: 'user_show',
  },
  auth_index: {
    title: 'ログイン',
    parent: 'top',
  },
}

export const getRoutes = () => {
  let name = useRoute().name
  let routes = {}

  while (breadcrumbs[name]) {
    routes[name] = breadcrumbs[name]

    name = breadcrumbs[name].parent
  }

  const reverseObject = (object) => {
    let newObject = {}

    Object.keys(object)
      .reverse()
      .map((route) => (newObject[route] = breadcrumbs[route]))

    return newObject
  }

  return reverseObject(routes)
}
