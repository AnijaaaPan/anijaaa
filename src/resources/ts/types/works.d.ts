type ZeroToNine = 0 | 1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9;

type MonthMarker =
    | "01"
    | "02"
    | "03"
    | "04"
    | "05"
    | "06"
    | "07"
    | "08"
    | "09"
    | "09"
    | "10"
    | "11"
    | "12";

type YearMarker = `20${ZeroToNine}${ZeroToNine}`;

export type ProjectTool =
    | "C#"
    | "C++"
    | "CSS"
    | "HTML"
    | "Java"
    | "Javascript"
    | "Laravel"
    | "Mysql"
    | "PHP"
    | "PostgreSQL"
    | "Python"
    | "Redis"
    | "TypeScript"
    | "Unity";

export declare interface YearWork {
    works: Work[];
    year: YearMarker;
}

export declare interface Work {
    description: string;
    imageUrl: string;
    month: MonthMarker;
    pageUrl: string;
    projectTools: ProjectTool[];
    title: string;
}
