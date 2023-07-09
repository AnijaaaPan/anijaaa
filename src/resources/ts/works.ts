import { YearWork } from "./types/works";

const yearWorks: YearWork[] = [
    {
        works: [
            {
                description: `Discordのチャットで遊べるMMORPG<br>2022/11まで稼働しており、停電でPCが破壊され終了<br>最終アカウント数は3.5万垢、アクティブユーザー数は500人を記録<br>現在新TAOの開発を計画中...`,
                imageUrl: "{{ asset('works/tao-ver-1') }}",
                month: "11",
                pageUrl: "tao-ver-1",
                projectTools: [
                    "CSS",
                    "HTML",
                    "Javascript",
                    "Laravel",
                    "Mysql",
                    "PHP",
                    "PostgreSQL",
                    "Python",
                ],
                title: "Tsukishima Art Online",
            },
        ],
        year: "2018",
    },
];

export default yearWorks;
